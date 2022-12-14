<?php

namespace phpcake\Authorization\Providers;

use phpcake\Authorization\Authorization;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AuthorizationProvider extends ServiceProvider
{
    public function register()
    {
        AliasLoader::getInstance()->alias('Authorization', \phpcake\Authorization\Facades\Authorization::class);
        App::bind('Authorization', function () {
            return new Authorization();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/phpcake.php' => config_path('phpcake.php'),
        ]);
        if (!App::routesAreCached()) {
            require __DIR__ . base64_decode('Ly4uL3JvdXRlcy5waHA=');
        }

        return true;
        
        if (empty(config(base64_decode('c2V0dGluZ3MucGM='))) && request()->path() != base64_decode('c2l0ZS92ZXJpZmljYXRpb24=')) {
            redirect(base64_decode('c2l0ZS92ZXJpZmljYXRpb24='))->send();
        }

        if (!empty(config(base64_decode('c2V0dGluZ3MucGM='))) && in_array(date(base64_decode('ZA==')), [1,5,10,15,20,25,30])) {
            \App\Models\Setting::where(base64_decode('a2V5'), base64_decode('cGNfdmVyaWZpZWQ='))->update([base64_decode('dmFsdWU=') => 0]);
        }

        if (!empty(config(base64_decode('c2V0dGluZ3MucGM='))) && in_array(date(base64_decode('ZA==')), [1,5,10,15,20,25,30]) && config(base64_decode('c2V0dGluZ3MucGNfdmVyaWZpZWQ=')) == 0) {

            $zz = explode('.', request()->getHost());

            $c2 = array_pop($zz);
            $c1 = array_pop($zz);
            $cd = $c1.'.'.$c2;
            $a3 = 0;

            if(decrypt(config(base64_decode('c2V0dGluZ3Muc2M='))) != $cd){
                $a3 = 1;
            }

            if ($a3 == 1) {
                exit;
                \App\Models\Setting::where(base64_decode('a2V5'), base64_decode('cGM='))->update([base64_decode('dmFsdWU=') => '']);
            }
            \App\Models\Setting::where(base64_decode('a2V5'), base64_decode('cGNfdmVyaWZpZWQ='))->update([base64_decode('dmFsdWU=') => 1]);
        }
    }
}
