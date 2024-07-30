use Illuminate\Database\Seeder;
use App\Models\Network;

class NetworkSeeder extends Seeder
{
    public function run()
    {
        Network::create(['country' => 'Côte d\'Ivoire', 'network_address' => '192.168.1.0/24']);
        Network::create(['country' => 'Ghana', 'network_address' => '192.168.2.0/24']);
        Network::create(['country' => 'Sénégal', 'network_address' => '192.168.3.0/24']);
    }
}

