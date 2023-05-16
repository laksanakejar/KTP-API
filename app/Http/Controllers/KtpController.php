<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KTP;
use Exception;
use App\Helpers\formatAPI;

class KtpController extends Controller
{
    public function index()
    {
        $data = KTP::all();

        if($data){
            return formatAPI::createAPI(200, 'success',$data);
        }else{
            return formatAPI::createAPI(400, 'failed',);
        }
    }

    public function store(Request $request)
    {
        try{
            //untuk create data ke database
            $pengguna = KTP::create($request->all());

            //get data siswa where id_siswa = id_siswa
            $data = KTP::where('nik', '=', $pengguna->nik)->get();

            //check data is valid? return data : failed
            if($data){
                return formatAPI::createAPI(200, 'success', $data);
            }else{
                return formatAPI::createAPI(400, 'failed',);
            }

            }catch(Exception $error){
                return formatAPI::createAPI(400, 'failed', $error);
        }
    }

    public function show($nik)
    {
        try{
            $data = KTP::where('id', '=', $nik)->first();
            if($data){
                return formatAPI::createAPI(200, 'success', $data);
            }else{
                return formatAPI::createAPI(400, 'failed',);
            }
            }catch(Exception $error){
                return formatAPI::createAPI(400, 'failed', $error);
        }
    }
    
    public function update(Request $request, $nik)
    {
        try{
            $pengguna = KTP::findorfail($nik);
            $pengguna->update($request->all());

            $data = KTP::where('id', '=', $pengguna->nik)->get();
            if($data){
                return formatAPI::createAPI(200, 'success', $data);
            }else{
                return formatAPI::createAPI(400, 'failed',);
            }

        }catch(Exception $error){
            return formatAPI::createAPI(400, 'failed', $error);
        }
    }

    public function destroy($nik)
    {
        try{
            $pengguna = KTP::findorfail($nik);
            
            $data = $pengguna->delete();
            if($data){
                return formatAPI::createAPI(200, 'success', $data);
            }else{
                return formatAPI::createAPI(400, 'failed',);
            }

        }catch(Exception $error){
            return formatAPI::createAPI(400, 'failed', $error);
        }
    }
}
