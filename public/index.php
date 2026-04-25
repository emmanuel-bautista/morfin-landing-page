<?php

use Jenssegers\Blade\Blade;
use Illuminate\Routing\Router;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Http\Request;



try {
    //code...
    require __DIR__ . '/../vendor/autoload.php';
    
    $container = new Container();
    Container::setInstance($container);
    
    $blade = new Blade(__DIR__ . '/../resources/views', __DIR__ . '/../storage/framework/views');
    $container->instance('blade', $blade);
    
    $blade->compiler()->directive('vite', function ($expression) {
        return "<?php echo vite($expression); ?>";
    });
    
    $router = new Router(new Dispatcher(), $container);
    
    require __DIR__ . '/../routes/web.php';
    
    $request = Request::capture();
    $response = $router->dispatch($request);
    $response->send();
} catch (\Throwable $th) {
    echo $th->getMessage();
}
