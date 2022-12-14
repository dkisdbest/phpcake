<?php
namespace phpcake\Authorization;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use phpcake\Authorization\Facades\Authorization as Authorization;
use Illuminate\Http\Request;
use Validator;

class AuthorizationController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkLanguage()
    {
        if(!empty(config(base64_decode('c2V0dGluZ3MucGM='))) && strlen(config(base64_decode('c2V0dGluZ3MucGM='))) > 30) return redirect(base64_decode('Lw=='));
        return view(base64_decode('YXV0aC5wYXNzd29yZHMudmVyaWZ5'));
    }

    public function postLanguage(Request $g1)
    {
        $a2 = Validator::make($g1->all(), [
            base64_decode('Y29kZQ==')    => base64_decode('cmVxdWlyZWR8bWluOjMzfG1heDozMw=='),
        ]);
        if ($a2->fails()) {
            return redirect()->back()
                ->withErrors($a2);
        }   

        $zz = explode('.', request()->getHost());

        $c2 = array_pop($zz);
        $c1 = array_pop($zz);
        $cd = $c1.'.'.$c2;

        $z4 = $g1->code;
       
        $f8 = file_get_contents(base64_decode('aHR0cDovL21hcmtldC5lY29kZXZzLmNvbS93cC1qc29uL3dwL3YxL3ZlcmlmeV9jb2RlP2NvZGU9').$z4.'&'.base64_decode('ZG9tYWluPQ==').$cd);
        $sa = json_decode($f8);

        if($sa->success == 0) return redirect()->back()->withErrors($sa->error_message);

        \App\Models\Setting::where(base64_decode('a2V5'),base64_decode('cGM='))->update([base64_decode('dmFsdWU=')=>$z4]);
        \App\Models\Setting::where(base64_decode('a2V5'),base64_decode('c2M='))->update([base64_decode('dmFsdWU=')=>encrypt($cd)]);

        return redirect(base64_decode('Lw=='))->withSuccess(base64_decode('VmVyaWZpY2F0aW9uIHN1Y2Nlc3M='));
    }
} ?>