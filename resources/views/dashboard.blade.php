@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <div class="row" id="units">
        <div class="col-sm-12">
            <div class="white-box" style="min-height: 650px;">
                <div class="d-flex justify-content-between">
                    <h3 class="box-title">Property</h3>
                    <a href="" data-bs-toggle="modal" data-bs-target="#addUnit"><button class="btn btn-primary">+ Add Property</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Type</th>
                                <th class="border-top-0">Location</th>
                                <th class="border-top-0">Size</th>
                                <th class="border-top-0">Price</th>
                                <th class="border-top-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($units as $key=>$unit)
                            <tr>
                                <td>ULP-{{$key+1}}</td>
                                <td>{{$unit->type}}</td>
                                <td>{{$unit->location}}</td>
                                <td>{{$unit->size}}</td>
                                <td>{{number_format($unit->price)}}</td>
                                <td>
                                    <div class="btn btn-{{$unit->status=='On Sale'?'success':'danger'}}">{{$unit->status}}</div>
                                </td>
                                @if($unit->status=='On Sale')
                                <td><a class="btn btn-danger" href="/asset/toogleStatus/{{$unit['id']}}">Sell</a></td>@endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addUnit" tabindex="-1" aria-labelledby="addUnit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUnit">Add Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/addUnit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                <label for="">Cover Photo</label>
                        <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                            <img id="out" src="" style="width: 100%; object-fit:contain;" />
                            <input type="file" accept="image/*" name="cover" id="cover" style="display: none;" class="form-control" onchange="loadCoverFile(event)">
                            <div class="pt-2" id="desc">
                                <div class="text-center" style="font-size: xxx-large; font-weight:bolder;">
                                    <i class="bi bi-upload"></i>
                                </div>
                                <div class="text-center">
                                    <label for="cover" class="btn btn-success text-white" title="Upload new cover image">Browse</label>
                                </div>
                                <div class="text-center prim">*File supported .png .jpg .webp</div>
                            </div>
                            <script>
                                var loadCoverFile = function(event) {
                                    var image = document.getElementById('out');
                                    image.src = URL.createObjectURL(event.target.files[0]);
                                    document.getElementById('cover').value == image.src;

                                };
                            </script>
                        </div>
                    <select class="form-select mb-1" aria-label="Default select example" name="type">
                        <option selected>Select Property type</option>
                        <option value="Land">Land</option>
                    </select>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" placeholder="Eg.1/8acres" name='size'>
                        <label for="">Size</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="number" class="form-control" placeholder=" " name='price'>
                        <label for="">Price(KShs)</label>
                    </div>
                    <div class="form-floating mb-2">
                        <select name="county" id="county" class="form-control" onchange="showSubCounties(this.value)"></select>
                        <label class="">County</label>
                    </div>
                    <div class="form-floating mb-2">
                        <select name="sub_county" id="sub_county" class="form-control" onchange="showWards(this.value)">
                        </select>
                        <label class="">Sub-county / Constituency</label>
                    </div>
                    <div class="form-floating mb-2">
                        <select name="ward" id="ward" class="form-control"></select>
                        <label class="">Ward / Sublocation</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" placeholder=" " name='location'>
                        <label for="">Local Area Name</label>
                    </div>
                    <?php $amm = ['Road', 'School', 'Hospital',];
                    $services = ['Water', 'Electricity', 'Security']; ?>
                    <div class="row m-2">
                        <h4><b>Available Services</b></h4>
                        @foreach($services as $service)
                        <div class="form-check col-6">
                            <input class="form-check-input" type="checkbox" name="service[]" value="{{$service}}" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                {{$service}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    @foreach($amm as $am)
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" placeholder=" " name='{{$am}}'>
                        <label for="">Distance from {{$am}}</label>
                    </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function showSubCounties(county) {
        var subCounties = {
            "Baringo": ["Baringo Central", "Baringo North", "Baringo South", "Eldama Ravine", "Mogotio", "Tiaty"],
            "Bomet": ["Bomet Central", "Bomet East", "Chepalungu", "Konoin", "Sotik"],
            "Bungoma": ["Bumula", "Kabuchai", "Kanduyi", "Kimilil", "Mt Elgon", "Sirisia", "Tongaren", "Webuye East", "Webuye West"],
            "Busia": ["Budalangi", "Butula", "Funyula", "Nambele", "Teso North", "Teso South"],
            "Elgeyo-Marakwet": ["Keiyo North", "Keiyo South", "Marakwet East", "Marakwet West"],
            "Embu": ["Manyatta", "Mbeere North", "Mbeere South", "Runyenjes"],
            "Garissa": ["Daadab", "Fafi", "Garissa Township", "Hulugho", "Ijara", "Lagdera", "Balambala"],
            "Homa Bay": ["Homabay Town", "Kabondo", "Karachwonyo", "Kasipul", "Mbita", "Ndhiwa", "Rangwe", "Suba"],
            "Isiolo": ["Isiolo", "Merti", "Garbatulla"],
            "Kajiado": ["Isinya", "Kajiado Central", "Kajiado North", "Loitokitok", "Mashuuru"],
            "Kakamega": ["Butere", "Kakamega Central", "Kakamega East", "Kakamega North", "Kakamega South", "Khwisero", "Lugari", "Lukuyani", "Lurambi", "Matete", "Mumias", "Mutungu", "Navakholo"],
            "Kericho": ["Ainamoi", "Belgut", "Bureti", "Kipkelion East", "Kipkelion West", "Soin/Sigowet"],
            "Kiambu": ["Gatundu North", "Gatundu South", "Githunguri", "Juja", "Kabete", "Kiambaa", "Kiambu", "Kikuyu", "Limuru", "Ruiru", "Thika Town", "Lari"],
            "Kilifi": ["Ganze", "Kaloleni", "Kilifi North", "Kilifi South", "Magarini", "Malindi", "Rabai"],
            "Kirinyaga": ["Kirinyaga Central", "Kirinyaga East", "Kirinyaga West", "Mwea East", "Mwea West"],
            "Kisii": ["Kitutu Chache North", "Kitutu Chache South", "Nyaribari Masaba", "Nyaribari Chache", "Bomachoge Borabu", "Bomachoge Chache", "Bobasi", "South Mugirango", "Bonchari"],
            "Kisumu": ["Kisumu Central", "Kisumu East ", "Kisumu West", "Muhoroni", "Nyakach", "Nyando", "Seme"],
            "Kitui": ["Kitui West", "Kitui Central", "Kitui Rural", "Kitui South", "Kitui East", "Mwingi North", "Mwingi West", "Mwingi Central"],
            "Kwale": ["Kinango", "Lunga Lunga", "Msambweni", "Matuga"],
            "Laikipia": ["Laikipia Central", "Laikipia East", "Laikipia North", "Laikipia West ", "Nyahururu"],
            "Lamu": ["Lamu East", "Lamu West"],
            "Machakos": ["Kathiani", "Machakos Town", "Masinga", "Matungulu", "Mavoko", "Mwala", "Yatta"],
            "Makueni": ["Kaiti", "Kibwezi West", "Kibwezi East", "Kilome", "Makueni", "Mbooni"],
            "Mandera": ["Banissa", "Lafey", "Mandera East", "Mandera North", "Mandera South", "Mandera West"],
            "Marsabit": ["Laisamis", "Moyale", "North Hor", "Saku"],
            "Meru": ["Buuri", "Igembe Central", "Igembe North", "Igembe South", "Imenti Central", "Imenti North", "Imenti South", "Tigania East", "Tigania West"],
            "Migori": ["Awendo", "Kuria East", "Kuria West", "Mabera", "Ntimaru", "Rongo", "Suna East", "Suna West", "Uriri"],
            "Mombasa": ["Changamwe", "Jomvu", "Kisauni", "Likoni", "Mvita", "Nyali"],
            "Murang’a": ["Gatanga", "Kahuro", "Kandara", "Kangema", "Kigumo", "Kiharu", "Mathioya", "Murang’a South"],
            "Nairobi": ["Dagoretti North", "Dagoretti South", "Embakasi Central", "Embakasi East", "Embakasi North", "Embakasi South", "Embakasi West", "Kamukunji", "Kasarani", "Kibra", "Lang’ata", "Makadara", "Mathare", "Roysambu", "Ruaraka", "Starehe", "Westlands"],
            "Nakuru": ["Bahati", "Gilgil", "Kuresoi North", "Kuresoi South", "Molo", "Naivasha", "Nakuru Town East", "Nakuru Town West", "Njoro", "Rongai", "Subukia"],
            "Nandi": ["Aldai", "Chesumei", "Emgwen", "Mosop", "Nandi Hills", "Tindiret"],
            "Narok": ["Narok East", "Narok North", "Narok South", "Narok West", "Transmara East", "Transmara West"],
            "Nyamira": ["Borabu", "Manga", "Masaba North", "Nyamira North", "Nyamira South"],
            "Nyandarua": ["Kinangop", "Kipipiri", "Ndaragwa", "Ol-Kalou", "Ol Joro Orok"],
            "Nyeri": ["Kieni East", "Kieni West", "Mathira East", "Mathira West", "Mukurweini", "Nyeri Town", "Othaya", "Tetu"],
            "Samburu": ["Samburu East", "Samburu North", "Samburu West"],
            "Siaya": ["Alego Usonga", "Bondo", "Gem", "Rarieda", "Ugenya", "Unguja"],
            "Taita-Taveta": ["Mwatate", "Taveta", "Voi", "Wundanyi"],
            "Tana River": ["Bura", "Galole", "Garsen"],
            "Tharaka-Nithi": ["Tharaka North", "Tharaka South", "Chuka", "Igambango’mbe", "Maara", "Chiakariga and Muthambi"],
            "Trans-Nzoia": ["Cherangany", "Endebess", "Kiminini", "Kwanza", "Saboti"],
            "Turkana": ["Loima", "Turkana Central", "Turkana East", "Turkana North", "Turkana South"],
            "Uasin Gishu": ["Ainabkoi", "Kapseret", "Kesses", "Moiben", "Soy", "Turbo"],
            "Vihiga": ["Emuhaya", "Hamisi", "Luanda", "Sabatia", "Vihiga"],
            "Wajir": ["Eldas", "Tarbaj", "Wajir East", "Wajir North", "Wajir South", "Wajir West"],
            "West Pokot": ["Central Pokot", "North Pokot", "Pokot South", "West Pokot"]

        };

        var subCountySelect = document.getElementById("sub_county");
        subCountySelect.options.length = 0;
        subCounties[county].forEach(function(subCounty) {
            var option = document.createElement("option");
            option.value = subCounty;
            option.text = subCounty;
            subCountySelect.add(option);
        });

        //showLocation(county);
    }

    function showWards(subCounty) {
        var wards = {
            "Dagoretti North": ["Kabiro", "Kwangware", "Kileleshwa", "Kilimani", "Gatina"],
            "Dagoretti South": ["Mutu-ini", "Ngando", "Riruta", "Waithaka"],
            "Embakasi Central": ["Kayole Central", "Kayole North", "Kayole South", "Komarock", "Matopeni / Spring valey"],
            "Embakasi East": ["Embakasi South", "Lower Savanna", "Mihang'o", "Upper Savanna", "Utawala"],
            "Embakasi North": ["Dandora Area 1", "Dandora Area 2", "Dandora Area 3", "Dandora Area 4", "Kariobangi North"],
            "Embakasi South": ["Imara Daima", "Kwa Njenga", "Kwa Reuben", "Kware", "Pipeline"],
            "Embakasi West": ["Kariobangi South", "Mowlem", "Umoja 1", "Umoja 2"],
            "Kamukunji": ["Airbase South", "California South", "Eastleigh North", "Pumwani"],
            "Kasarani": ["Clay City", "Mwiki", "Njiru", "Ruai"],
            "Kibra": ["Laini Saba", "Lindi", "Makina", "Sarangombe", "Woodley/Kenyatta Golf Course"],
            "Langata": ["Highrise", "Karen", "Nairobi West", "Mugumoini", "South C"],
            "Makadara": ["Makongeni South", "Maringo", "Viwandani"],
            "Mathare": ["Huruma", "Kiamaiko", "Mabatini", "Mlango Kubwa", "Ngei"],
            "Ruaraka": ["Babadogo", "Korogocho", "Lucky Summer", "Mathare North", "Utalii"],
            "Roysambu": ["Githurai", "Kahawa", "Kahawa West", "Roysambu", "Zimmerman"],
            "Starehe": ["Landimawe", "Nairobi South", "Nairobi Hospital", "Ziwani/Kariokor"],
            "Westlands": ["Kangemi", "Karura", "Kitisuru", "Mountain View", "Parklands/Highridge"],
            //nyeri county
            "Tetu": ["Aguthi-Gaaki", "Dedan Kimathi", "Wamagana"],
            "Kieni": ["Dedan Kimathi", "Gakawa", "Gatarakwa", "Kabaru", "Mugunda", "Mweiga", "Mwiyogo/EndaraSha", "Naromoro Kiamuthaga", "Thegu River", "Wamagana"],
            "Mathira": ["Iriani", "Karatina Town", "Kirimukuyu", "Konyu", "Magutu", "Ruguru"],
            "Othaya": ["Chinga", "Iria-ini", "Karima", "Mahiga"],
            "Mukurweini": ["Gikondi", "Rugi", "Mukurwe-ini West", "Mukurwe-ini Central"],
            "Nyeri Town": ["Kiganjo/Mathari", "Rware", "Gatitu/Muruguru", "Ruring’u", "Kamakwa/Mukaro"],
            //Kiambu county
            "Gatundu South": ["Kiamwangi Ward", "Kiganjo Ward", "Ndarugo Ward", "Ngenda Ward"],
            "Gatundu North": ["Gituamba Ward", "Githobokoni Ward", "Chania Ward", "Mang’u Ward"],
            "Juja": ["Murera Ward", "Theta Ward", "Juja Ward", "Witeithie Ward", "Kalimoni Ward"],
            "Thika": ["Gatuanyaga Ward", "Hospita Ward", "Kamenu Ward", "Township Ward"],
            "Ruiru": ["Biashara", "Gatongora", "Gitothua", "Kahawa/Sukari", "Kahawa Wendani", "Kiuu", "Mwiki", "Mwihoko 1"],
            "Githunguri": ["Githiga", "Githunguri", "Ikinu", "Komothai 3", "Ngewa"],
            "Kiambu": ["Ndumberi 3", "Riabai", "Ting’ang’a", "Township"],
            "Kiambaa": ["Cianda", "Karuri", "Ndenderu", "Muchatha", "Kihara"],
            "Kabete": ["Gitaru", "Muguga", "Nyathuna", "Kabete", "Uthiru"],
            "Kikuyu": ["Karai", "Nachu", "Sigona", "Kikuyu", "Kinoo"],
            "Limuru": ["Bibirioni", "Limuru Central", "Limuru East", "Ndeiya", "Ngecha Tigoni"],
            "Lari": ["Kinale", "Kijabe", "Nyanduma", "Kamburu", "Lari/Kirenga"],
            //kirinyaga county
            "Gichugu": ["Gathigiriri", "Kangai", "Mutithi", "Murindiko", "Nyangati", "Teberere", "Wamumu"],
            "Kirinyaga Central": ["Kabare Baragwi", "Karumandi", "Ngariama", "Njukiini"],
            "Mwea": ["Kariti", "Kiine", "Mukure"],
            "Ndia": ["Inoi", "Kanuekini", "Kerugoya", "Mutira"],
            //nyandarua
            "Kinangop": ["Engineer", "Gathara", "Githabai", "Magumu", "Murungaro", "North Kinangop", "Njabini/Kibiru", "Nyakio"],
            "Kipipiri": ["Geta", "Githioro", "Kipipiri", "Wanjohi"],
            "Ol Joro Orok": ["Charagita", "Gathanji", "Gatimu", "Weru"],
            "Ol Kalou": ["Karau", "Kaimbaga", "Kanjuire Ridge", "Milangine", "Rurii"],
            "Ndaragua": ["Central", "Kiriita", "Leshau/Pondo", "Shamata"],
            //Nakuru
            "Bahati": ["Bahati", "Dundori", "Kabatini", "Kiamaina", "Lanet/Umoja"],
            "Gilgil": ["Barut", "Elementaita", "Gilgil", "Malewa West", "Mbaruk/Eburu", "Murindati"],
            "Kuresoi North": ["Amalo", "Kamara", "Kiptororo", "Nyota", "Sirikwa"],
            "Kuresoi South": ["Amalo", "Keringet", "Kiptagich", "Tinet"],
            "Molo": ["Elburgon", "Mariashoni", "Molo", "Turi"],
            "Naivasha": ["Biashara", "Hells Gate", "Lake View", "Maiella", "Mai Mahiu", "Naivasha East", "Olkaria", "Viwandani"],
            "Nakuru Town West": ["Barut", "Kapkures", "Kaptembwo", "London", "Rhoda", "Shabaab"],
            "Nakuru Town East": ["Biashara", "Flamingo", "Kivumbini", "Menengai", "Nakuru East"],
            "Njoro": ["Kihingo", "Lare", "Mau Narok", "Mauche", "Nessuit", "Njoro"],
            "Rongai": ["Menengai", "Mosop", "Solai", "Visoi", "WesSoint"],
            "Subukia": ["Kabazi", "Subukia", "Waseges"],

            //muranga
            "Gatanga": ["Ithanga", "Kakuzi/Mitumbiri", "Kihumbu-ini", "Mugumo-ini"],
            "Kandara": ["Gaichanjiru", "Ithiru", "Kangundu-ini", "Muruka", "Ng’araria", "Ruchu"],
            "Kangema": ["Kanyenya-ini", "Muguru", "Rwathia"],
            "Kiharu": ["Gaturi", "Mbiri", "Mugoiri", "Murarandia", "Township", "Wangu"],
            "Kigumo": ["Kahumbu", "Kangari", "Kigumo", "Kinyona", "Muthithi"],
            "Mathioya": ["Kamacharia", "Kituhi", "Kiiru"],
            "Maragwa": ["Ichagaki", "Kamahuha", "Kambiti", "Kimorori/Wempa", "Makuyu", "Nginda"],

            //mombasa
            "Changamwe": ["Airport", "Chaani", "Changamwe", "Kipevu", "Port Reitz"],
            "Jomvu": ["Jomvu Kuu", "Mikindani", "Miritini"],
            "Kisauni": ["Bamburi", "Junda", "Magogoni", "Mjambere", "Mtopanga", "Mwakirunge", "Shanzu"],
            "Likoni": ["Bofu", "Likoni", "Mtongwe", "Shika Adabu", "Timbwani"],
            "Mvita": ["Majengo Ganjoni/Shimanzi", "Mji wa Kale/Makadara", "Tononoka", "Todor"],
            "Nyali": ["Frere Town", "Kadzandani", "Kongowea", "Mkomani", "Ziwa la Ngombe"],

            //kilifi

            "Ganze": ["Bamba", "Ganze", "Jaribuni", "Sokoke"],
            "Kaloleni": ["Kaloleni", "Kayafungo", "Mariakani", "Mwanamwinga"],
            "Kilifi North": ["Dabaso", "Kibarani", "Matsangoni", "Mnarani", "Sokoni", "Tezo", "Watamu"],
            "Kilifi South": ["Chasimba", "Junju", "Mtepeni", "Mwarakaya", "Shimo la Tewa"],
            "Magarini": ["Adu", "Garashi", "Gongoni", "Magarini", "Maarafa", "Sabaki"],
            "Malindi": ["Ganda", "Jilore", "Kakuyuni", "Malindi Town", "Shella"],
            "Rabai": ["Kambe-Ribe", "Mwawesa", "Rabai/Kisurutuni", "Ruruma"],
            //machakos

            "Kangundo": ["Kangundo Central", "Kangundo East", "Kangundo North", "Kangundo West"],
            "Kathiani": ["Kathiani Central", "Lower Kaewa/Kaani", "Mitaboni", "Upper Kaewa/Iveti"],
            "Machakos Town": ["Kalama", "Kola", "Machakos Central", "Mua", "Mumbuni North", "Mutitini", "Muvuti/Kiima-Kimwe"],
            "Mavoko": ["Athi River", "Kinanie", "Muthwani", "Syokimau/Mlolongo"],
            "Masinga": ["Central", "Ekalakala", "Kivaa", "Masinga", "Muthesya", "Ndithini"],
            "Matungulu": ["Kyeleni", "Matungulu East", "Matungulu North", "Matungulu West", "Tala"],
            "Mwala": ["Kibauni", "Makutano/Mwala", "Masii", "Mbiuni", "Muthetheni", "Wamunyu"],
            "Yatta": ["Ikomba", "Katangi", "Kithimani", "Matuu", "Ndalani"],

            //Kajiado

            "Kajiado Central": ["Dalalekutuk", "Ildamat", "Matapato North", "Matapato South", "Purko"],
            "Kajiado East": ["Imaroror", "Kaputiei North", "Kenyawa-Poka", "Kitengela", "Oloosirkon/Sholinke"],
            "Kajiado North": ["Ngong", "Nkaimurunya", "Olkeri", "Oloolua", "Ongata Rongai"],
            "Kajiado South": ["Entonet/Lenkisi", "Keikuku", "Kimana", "Mbirikani/Eselen", "Rombo"],
            "Kajiado West": ["Ewuaso Oonkidong’i", "Iloodokilani", "Keekonyokie", "Magadi", "Mosiro"],
            //embu

            "Manyatta": ["Gaturi South", "Kithimu", "Kirimari", "Mbeti North", "Nginda", "Ruguru/Ngandori"],
            "Mbeere North": ["Evurore", "Muminji", "Nthawa"],
            "Mbeere South": ["Amakim", "Kiambere", "Mavuria", "Mbeti South", "Mwea"],
            "Runyenjes": ["Central Ward", "Gaturi North", "Kaagari North", "Kaagari South", "Kyeni North", "Kyeni South"],
            //Lamu

            "Lamu East": ["Basuba", "Faza", "Kiunga"],
            "Lamu West": ["Bahari", "Hindi", "Hongwe", "Mkomani", "Mkunumbi", "Shella", "Witu"],

            //Transzoia County

            "Cherangany": ["Chepsiro/Kiptoror", "Cherangany/Suwerwa", "Kaplamai", "Makutano", "Motosiet", "Sinyerere", "Sitatunga"],
            "Endebes": ["Chepchoina", "Endebess", "Matumbei"],
            "Kiminini": ["Hospital", "Kiminini", "Nabiswa", "Sikhendu", "Sirende", "Waitaluk"],
            "kitale": ["kitale"],
            "Kwanza": ["Bidii", "Keiyo", "Kapomboi", "Kwanza"],
            "Saboti": ["Kinyoro", "Machewa", "Matisi", "Saboti", "Tuwani"],

            //Makueni

            "Kaiti": ["Ilima", "Kee", "Kilungu", "Ukia"],
            "Kibwezi East": ["Ivingoni/Nzambani", "Masongaleni", "Mtito Andei", "Thange"],
            "Kibwezi West": ["Emali/Mulala", "Kikumbulyu North", "Kikumbulyu South", "Makindu", "Nguu/Masumba", "Nguumo"],
            "Kilome": ["Kalanzoni/Kiima Kiu", "Kasikeu", "Mukaa"],
            "Makueni": ["Kathonzweni", "Kitise/Kithuki", "Mavindini", "Mbitini", "Muvau/Kikuumini", "Nzau/Kilili/Kalamba", "Wote"],
            "Mbooni": ["Kalawa", "Kithungo/Kitundu", "Kiteta/Kisau", "Mbooni", "Tulimani", "Waia-Kako"],

            //Kericho
            "Ainamoi": ["Ainamoi", "Kapkugerwet", "Kapsoit", "Kipchebor", "Kipchimchim", "Kapsaos"],
            "Belgut": ["Cheptororiet/Seretut", "Chaik", "Kabianga", "Kapsuser", "Waldai"],
            "Bureti": ["Cheboin", "Chemosot", "Cheplanget", "Kapkatet", "Kisiara", "Litein", "Tebesonik"],
            "Kipkelion East": ["Chepseon", "Kedowa/Kimugul", "Londiani", "Tendeno/Sorget"],
            "Kipkelion West": ["Chilchila", "Kamasian", "Kipkelion", "Kunyak"],
            "Sigowet/Soin": ["Kaplelartet", "Sigowet", "Soin", "Soliat"],

            //uasin gishu

            "Ainabkoi": ["Ainabkoi/Olare", "Kapsoya", "Kaptagat"],
            "Eldoret": ["Eldoret"],
            "Kapseret": ["Langas", "Kipkenyo", "Megun", "Ngeria", "Simat/Kapseret"],
            "Keses": ["Cheptiret/Kipchamo", "Racecourse", "Tarakwa", "Tulwet/Chuiyat"],
            "Moiben": ["Karuna/Meibeki", "Kimumu", "Moiben", "Sergoit", "Tembelio"],
            "Soy": ["Kapsuswa/Kuinet", "Kapkures", "Moi's Bridge", "Segero/Barsombe", "Soy", "Ziwa", "Kipsomba"],
            "Turbo": ["Huruma", "Kapsaos", "Kamagut", "Kiplombe", "Ngenyilel", "Tapsagoi"],

            //Laikipia County

            "Laikipia East": ["Ngobit", "Tigithi", "Thingithu", "Nanyuki", "Umande"],
            "Laikipia West": ["Olmoran", "Rumuruti Township", "Githiga", "Marmanet", "Igwamiti", "Salama"],
            "Laikipia North": ["Mukogodo East", "Mukogodo West", "Segera", "Sosian"],


            //kisumu county
            "Kisumu West": ["South West Kisumu", "Central Kisumu", "Kisumu North", "West Kisumu", "North West Kisumu"],
            "Kisumu Central": ["Raliways", "Migosi", "Shaurimoyo", "Kaloleni", "Market Milimani", "Kondele", "Nyalenda B", ""],
            "Kisumu East": ["Kajulu", "Kolwa East", "Manyatta B", "Nyalenda A", "Kolwa Central"],
            "Seme": ["West Seme", "Central Seme", "East Seme", "North Seme"],
            "Nyando": ["East Kano", "Awasi/Onjiko", "Ahero", "Kabonyo/Kanyag Wal", "Kobura"],
            "Muhoroni": ["Miwani", "Ombeyi", "Masogo/Nyang’oma", "Chemelil/Muhoroni", "Koru"],
            "Nyakach": ["South East Nyakach", "West Nyakach", "North Nyakach", "Central Nyakach", "South West Nyakach"],

            //kakamega county
            "Lukuyani": ["Nzoia"],

            //Baringo
            "Baringo North": ["Barwessa", "Saimo Kipsaraman", "Saimo Soi", "Kabartonjo", "Bartabwa"],
            "Tiaty West": ["Tirioko", "Kolowa", "Ribkwo"],
            "Tiaty East": ["Silale", "Tangulbei", "Loiyamorok", "Churo/Amaya"],
            "Mogotio": ["Mogotio", "Emining", "Kisanana"],
            "Baringo South": ["Mukutani", "Marigat", "Mochongoi", "Ilchamus"],
            "Eldama Ravine": ["Lembus", "Ravine", "Lembus Kwen", "Koibatek", "Lembus Perkerra", "Mumberes/Majimazuri"],
            "Baringo Central": ["Kabarnet", "Sacho", "Tenges", "Kapropita", "Ewalel Chapchap"],

            //Bomet
            "Bomet Central": ["Silibwet", "Singorwet", "Ndarawetta", "Chesoen", "Mutarakwa"],
            "Bomet East": ["Longisa", "Kembu", "Chemaner", "Merigi", "Kipreres"],
            "Chepalungu": ["Sigor", "Kongasis", "Chebunyo", "Nyongores", "Siongiroi"],
            "Sotik": ["Ndanai/Abosi", "Kipsonoi", "Kapletundo", "Chemagel", "Manaret/Rongena"],
            "Konoin": ["Kimulot", "Mogogosiek", "Boito", "Embomos", "Chepchabas"],
            // Add more sub-counties and their wards here
        };

        var wardSelect = document.getElementById("ward");
        wardSelect.options.length = 0;
        wards[subCounty].forEach(function(ward) {
            var option = document.createElement("option");
            option.value = ward;
            option.text = ward;
            wardSelect.add(option);
        });

    }
    document.addEventListener("DOMContentLoaded", () => {
        var counties = [
            "Mombasa",
            "Kwale",
            "Kilifi",
            "Tana River",
            "Lamu",
            "Taita/Taveta",
            "Garissa",
            "Wajir",
            "Mandera",
            "Marsabit",
            "Isiolo",
            "Meru",
            "Tharaka-Nithi",
            "Embu",
            "Kitui",
            "Machakos",
            "Makueni",
            "Nyandarua",
            "Nyeri",
            "Kirinyaga",
            "Murang'a",
            "Kiambu",
            "Turkana",
            "West Pokot",
            "Samburu",
            "Trans Nzoia",
            "Uasin Gishu",
            "Elgeyo/Marakwet",
            "Nandi",
            "Baringo",
            "Laikipia",
            "Nakuru",
            "Narok",
            "Kajiado",
            "Kericho",
            "Bomet",
            "Kakamega",
            "Vihiga",
            "Bungoma",
            "Busia",
            "Siaya",
            "Kisumu",
            "Homa Bay",
            "Migori",
            "Kisii",
            "Nyamira",
            "Nairobi City"
        ]
        var CountySelect = document.getElementById("county");
        CountySelect.options.length = 0;
        counties.forEach(function(County) {
            var option = document.createElement("option");
            option.value = County;
            option.text = County;
            CountySelect.add(option);
        });

    });
</script>
@endsection