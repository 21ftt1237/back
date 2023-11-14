use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin_login'); // Admin login form view
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::guard('admin')->attempt($credentials)) {
            // Admin login successful
           return view('Dashboard-adm');;
        }

        // Admin authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}

