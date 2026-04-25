<?php

use Illuminate\Container\Container;

if (!function_exists('public_path')) {
    function public_path(string $path = ''): string {
        return __DIR__ . '/../public' . ($path ? DIRECTORY_SEPARATOR . ltrim($path, '/') : '');
    }
}

if (!function_exists('view')) {
    function view(string $view, array $data = []): string {
        $blade = Container::getInstance()->make('blade');
        return $blade->render($view, $data);
    }
}

if (!function_exists('vite')) {
    function vite(array $entries): string {
        $publicPath = __DIR__ . '/../public';
        $hotPath = $publicPath . '/hot';
        
        if (file_exists($hotPath)) {
            $url = trim(file_get_contents($hotPath));
            if (empty($url)) $url = 'http://localhost:5173';
            
            $html = '<script type="module" src="' . $url . '/@vite/client"></script>';
            foreach ($entries as $entry) {
                if (str_ends_with($entry, '.css')) {
                    $html .= '<link rel="stylesheet" href="' . $url . '/' . $entry . '">';
                } else {
                    $html .= '<script type="module" src="' . $url . '/' . $entry . '"></script>';
                }
            }
            return $html;
        }

        $manifestPath = $publicPath . '/build/manifest.json';
        if (file_exists($manifestPath)) {
            $manifest = json_decode(file_get_contents($manifestPath), true);
            $html = '';
            foreach ($entries as $entry) {
                if (isset($manifest[$entry])) {
                    $file = '/build/' . $manifest[$entry]['file'];
                    if (str_ends_with($file, '.css')) {
                        $html .= '<link rel="stylesheet" href="' . $file . '">';
                    } else {
                        $html .= '<script type="module" src="' . $file . '"></script>';
                    }
                    if (isset($manifest[$entry]['css'])) {
                        foreach ($manifest[$entry]['css'] as $cssFile) {
                            $html .= '<link rel="stylesheet" href="/build/' . $cssFile . '">';
                        }
                    }
                }
            }
            return $html;
        }
        
        return '';
    }
}
