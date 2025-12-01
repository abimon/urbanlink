<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnitContoller extends Controller
{
    public function index()
    {
        
    }
    public function create()
    {
        $subcounties = [
            "Baringo" => ["Baringo Central", "Baringo North", "Baringo South", "Eldama Ravine", "Mogotio", "Tiaty"],
            "Bomet" => ["Bomet Central", "Bomet East", "Chepalungu", "Konoin", "Sotik"],
            "Bungoma" => ["Bumula", "Kabuchai", "Kanduyi", "Kimilil", "Mt Elgon", "Sirisia", "Tongaren", "Webuye East", "Webuye West"],
            "Busia" => ["Budalangi", "Butula", "Funyula", "Nambele", "Teso North", "Teso South"],
            "Elgeyo-Marakwet" => ["Keiyo North", "Keiyo South", "Marakwet East", "Marakwet West"],
            "Embu" => ["Manyatta", "Mbeere North", "Mbeere South", "Runyenjes"],
            "Garissa" => ["Daadab", "Fafi", "Garissa Township", "Hulugho", "Ijara", "Lagdera", "Balambala"],
            "Homa Bay" => ["Homabay Town", "Kabondo", "Karachwonyo", "Kasipul", "Mbita", "Ndhiwa", "Rangwe", "Suba"],
            "Isiolo" => ["Isiolo", "Merti", "Garbatulla"],
            "Kajiado" => ["Isinya", "Kajiado Central", "Kajiado North", "Loitokitok", "Mashuuru"],
            "Kakamega" => ["Butere", "Kakamega Central", "Kakamega East", "Kakamega North", "Kakamega South", "Khwisero", "Lugari", "Lukuyani", "Lurambi", "Matete", "Mumias", "Mutungu", "Navakholo"],
            "Kericho" => ["Ainamoi", "Belgut", "Bureti", "Kipkelion East", "Kipkelion West", "Soin/Sigowet"],
            "Kiambu" => ["Gatundu North", "Gatundu South", "Githunguri", "Juja", "Kabete", "Kiambaa", "Kiambu", "Kikuyu", "Limuru", "Ruiru", "Thika Town", "Lari"],
            "Kilifi" => ["Ganze", "Kaloleni", "Kilifi North", "Kilifi South", "Magarini", "Malindi", "Rabai"],
            "Kirinyaga" => ["Kirinyaga Central", "Kirinyaga East", "Kirinyaga West", "Mwea East", "Mwea West"],
            "Kisii" => ["Kitutu Chache North", "Kitutu Chache South", "Nyaribari Masaba", "Nyaribari Chache", "Bomachoge Borabu", "Bomachoge Chache", "Bobasi", "South Mugirango", "Bonchari"],
            "Kisumu" => ["Kisumu Central", "Kisumu East ", "Kisumu West", "Muhoroni", "Nyakach", "Nyando", "Seme"],
            "Kitui" => ["Kitui West", "Kitui Central", "Kitui Rural", "Kitui South", "Kitui East", "Mwingi North", "Mwingi West", "Mwingi Central"],
            "Kwale" => ["Kinango", "Lunga Lunga", "Msambweni", "Matuga"],
            "Laikipia" => ["Laikipia Central", "Laikipia East", "Laikipia North", "Laikipia West ", "Nyahururu"],
            "Lamu" => ["Lamu East", "Lamu West"],
            "Machakos" => ["Kathiani", "Machakos Town", "Masinga", "Matungulu", "Mavoko", "Mwala", "Yatta"],
            "Makueni" => ["Kaiti", "Kibwezi West", "Kibwezi East", "Kilome", "Makueni", "Mbooni"],
            "Mandera" => ["Banissa", "Lafey", "Mandera East", "Mandera North", "Mandera South", "Mandera West"],
            "Marsabit" => ["Laisamis", "Moyale", "North Hor", "Saku"],
            "Meru" => ["Buuri", "Igembe Central", "Igembe North", "Igembe South", "Imenti Central", "Imenti North", "Imenti South", "Tigania East", "Tigania West"],
            "Migori" => ["Awendo", "Kuria East", "Kuria West", "Mabera", "Ntimaru", "Rongo", "Suna East", "Suna West", "Uriri"],
            "Mombasa" => ["Changamwe", "Jomvu", "Kisauni", "Likoni", "Mvita", "Nyali"],
            "Murang’a" => ["Gatanga", "Kahuro", "Kandara", "Kangema", "Kigumo", "Kiharu", "Mathioya", "Murang’a South"],
            "Nairobi" => ["Dagoretti North", "Dagoretti South", "Embakasi Central", "Embakasi East", "Embakasi North", "Embakasi South", "Embakasi West", "Kamukunji", "Kasarani", "Kibra", "Lang’ata", "Makadara", "Mathare", "Roysambu", "Ruaraka", "Starehe", "Westlands"],
            "Nakuru" => ["Bahati", "Gilgil", "Kuresoi North", "Kuresoi South", "Molo", "Naivasha", "Nakuru Town East", "Nakuru Town West", "Njoro", "Rongai", "Subukia"],
            "Nandi" => ["Aldai", "Chesumei", "Emgwen", "Mosop", "Nandi Hills", "Tindiret"],
            "Narok" => ["Narok East", "Narok North", "Narok South", "Narok West", "Transmara East", "Transmara West"],
            "Nyamira" => ["Borabu", "Manga", "Masaba North", "Nyamira North", "Nyamira South"],
            "Nyandarua" => ["Kinangop", "Kipipiri", "Ndaragwa", "Ol-Kalou", "Ol Joro Orok"],
            "Nyeri" => ["Kieni East", "Kieni West", "Mathira East", "Mathira West", "Mukurweini", "Nyeri Town", "Othaya", "Tetu"],
            "Samburu" => ["Samburu East", "Samburu North", "Samburu West"],
            "Siaya" => ["Alego Usonga", "Bondo", "Gem", "Rarieda", "Ugenya", "Unguja"],
            "Taita-Taveta" => ["Mwatate", "Taveta", "Voi", "Wundanyi"],
            "Tana River" => ["Bura", "Galole", "Garsen"],
            "Tharaka-Nithi" => ["Tharaka North", "Tharaka South", "Chuka", "Igambango’mbe", "Maara", "Chiakariga and Muthambi"],
            "Trans-Nzoia" => ["Cherangany", "Endebess", "Kiminini", "Kwanza", "Saboti"],
            "Turkana" => ["Loima", "Turkana Central", "Turkana East", "Turkana North", "Turkana South"],
            "Uasin Gishu" => ["Ainabkoi", "Kapseret", "Kesses", "Moiben", "Soy", "Turbo"],
            "Vihiga" => ["Emuhaya", "Hamisi", "Luanda", "Sabatia", "Vihiga"],
            "Wajir" => ["Eldas", "Tarbaj", "Wajir East", "Wajir North", "Wajir South", "Wajir West"],
            "West Pokot" => ["Central Pokot", "North Pokot", "Pokot South", "West Pokot"]

        ];
        $amm = ['Road', 'School', 'Hospital'];
        $services = ['Water', 'Electricity', 'Security', 'Fibre Internet', 'Sewage'];
        $types = ['Gated', 'Own Compound', 'Open'];
        $counties = array_keys($subcounties);
        
        $subs = json_encode($subcounties);
        return view('dashboard.property.create', compact('counties', 'subs', 'amm', 'services', 'types'));
    }
    public function store()
    {
        try {
            $services = [];
            foreach ((request()->service) as $service) {
                array_push($services, $service);
            }
            $features = [];
            $imps = ['Road', 'School', 'Hospital'];
            foreach ($imps as $imp) {
                array_push($features, [$imp => request()->$imp]);
            }
            $serv = json_encode($services);
            $features = json_encode($features);
            if (request()->hasFile('cover')) {
                $coverImage = request()->file('cover');
                $coverImageName = time(). '.'. $coverImage->getClientOriginalExtension();
                $path=$coverImage->move('storage/uploads/properties', $coverImageName);
            }
            $location = json_encode([
                "county" => request("county"),
                "sub_county" => request("sub_county"),
                "ward" => request("ward"),
                "location" => request("location")
            ]);
            $uniqid = uniqid();
            Unit::create([
                "title" => strtoupper($uniqid),
                "slug" => Str::slug($uniqid),
                "description" => request("description"),
                "category" => request("category"),
                "location" => $location,
                "path" => $path,
                "type" => request("compound"),
                "size" => request("size"),
                "services" => $serv,
                "features" => $features,
                "price" => request("price"),
            ]);
            return redirect('/dashboard')->with('success', 'Property Added Successfully');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
   
    

    public function show()
    {
        $assets=Unit::where('location','LIKE','%'.request()->s.'%')->orWhere('price','LIKE','%'.request()->s.'%')->get();
        return view('asset.assets',compact('assets'));
    }

    public function edit(Unit $unit)
    {
        //
    }


    public function update(Request $request, Unit $unit)
    {
        //
    }

    public function destroy(Unit $unit)
    {
        //
    }
}
