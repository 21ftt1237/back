namespace App\Auth;

use Illuminate\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;

class DrivAuthDriver extends Guard
{
    public function __construct(UserProvider $provider, Request $request)
    {
        parent::__construct($provider, $request);
    }

    /**
     * Attempt to authenticate a driver based on the credentials.
     *
     * @param  array  $credentials
     * @param  bool   $remember
     * @param  bool   $login
     * @return bool
     */
    public function attempt(array $credentials = [], $remember = false, $login = true)
    {
        // Retrieve the driver based on the provided email
        $driver = $this->provider->retrieveByCredentials([
            'driver_email' => $credentials['email'],
        ]);

        if ($driver && $this->provider->validateCredentials($driver, $credentials)) {
            if ($login) {
                $this->login($driver, $remember);
            }
            return true;
        }

        return false;
    }
}
