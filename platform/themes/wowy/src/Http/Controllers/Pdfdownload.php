<!-- <?php


namespace Theme\Wowy\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class Pdfdownload extends Controller
{
    public function download(Request $request,$file){
        
        return response()->download(public_path('aseets/' .$file));
    }
    
}
?> -->
