<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AtlantisCinema - Házirend</title>
        <!-- stíluslapok -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Css/altalanos-formazas.css">
        <link rel="stylesheet" href="Css/hazirend.css">
        <!-- scriptek -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>      
    </head>
    <body> 
        @extends('layouts.felhasznaloiApp')
        @section('content')

            <article>
                <div>
                    <h2>Házirend</h2>
                </div>
                <div>
                    <h4>Általános</h4>
                    <ul>
                        <li><p>Mozilátogató a mozijegy megvásárlásával elfogadja a Házirendet.</p></li>
                        <li><p>Jelen házirend legalább egy példánya a mozi területén bárki által látható helyen kifüggesztésre kerül.</p></li>
                        <li><p>A mozi területén minden látogatóra kötelező érvényű a Házirend és a tisztaság betartása, alapvető elvárás a személyes higiénia megléte, a másik vendég tiszteletben tartása és a kulturált viselkedés a mozi egész területén, az előadásokon kívül és az előadások ideje alatt is.</p></li>
                        <li><p>A mozi előadásaira mindenki köteles jegyet váltani (például rendőr, katona, újságíró, 2 éves kor feletti gyerek).</p></li>
                        <li><p>A látogatók a mozijegyükön feltüntetett sor és székszámnak megfelelő helyen kötelesek helyet foglalni, és jegyüket illetve blokkjukat az előadás végéig megőrizni.</p></li>
                        <li><p>A mozitermekbe személyenként csak 1 csomag vihető be, melynek mérete nem haladhatja meg a 25cm x 25cm x 40cm-es méretet. Csomagmegőrzés a mozi területén nem vehető igénybe. A csomagot úgy kell elhelyezni, hogy a közlekedő folyosók szabadon maradjanak.</p></li>
                        <li><p>A filmekben, elozetesekben és reklámokban elhangzó és látható tartalomért a mozi nem válal felelosséget, ebbol eredendo kárt nem térít meg, nem vonható felelosségre semmilyen kárért vagy veszteségért.</p></li>
                        <li><p>Előadás alatt a mobiltelefon használata tilos! A tiltás megszegőit a mozi dolgozói a moziterem azonnali elhagyására szólíthatják fel.</p></li>
                        <li><p>Kérjük kedves Nézőinket a Nemzeti Média- és Hírközlési Hatóság által az egyes filmekre meghatározott korhatár-ajánlások betartására!</p></li>
                    </ul>
                </div>

                <div>
                    <h4>Szerzői jogok</h4>
                    <ul>
                        <li><p>A mozitermekben szigorúan tilos a kép- és/vagy hanganyag rögzítése bármilyen eszközzel. A filmvetítés alatti kép- és/vagy hangrögzítés bűncselekmény, és feljelentést von maga után! Felhívjuk figyelmüket, hogy termeinkben kamerás megfigyelőrendszer működik!</p></li>
                    </ul>
                </div>

                <div>
                    <h4>Moziműsor</h4>
                    <ul>
                        <li><p>A mozi a mindenkori aktuális heti moziműsort a www.atlantiscinema.hu oldalon közli.</p></li>
                        <li><p>A feltüntetett kezdési időpont nem a film kezdési időpontját jelenti, mert a mozi a filmek előtt reklámokat, előzeteseket vetít.</p></li>
                        <li><p>A műsorváltozás (beleértve a teremcserét is) jogát fenntartjuk!</p></li>
                    </ul>
                </div>

                <div>
                    <h4>Jegyfoglalás</h4>
                    <ul>
                        <li><p>A személyesen, vagy online lefoglalt jegyeket az aktuális vetítés megkezdése előtt legkésőbb 30 perccel kell átvenni. Ha ez a megadott időpontban nem történik meg, a rendszer automatikusan törli a foglalást. A lefoglalt jegyeket nem áll módunkban soron kívül kiadni.</p></li>
                    </ul>
                </div>

                <div>
                    <h4>Jegyvásárlás</h4>
                    <ul>
                        <li><p>A személyesen, vagy online lefoglalt jegyeket az aktuális vetítés megkezdése előtt legkésőbb 30 perccel kell átvenni. Ha ez a megadott időpontban nem történik meg, a rendszer automatikusan törli a foglalást. A lefoglalt jegyeket nem áll módunkban soron kívül kiadni.</p></li>
                        <li><p>A megvásárolt mozijegyeket a rajtuk szereplő vetítési időpont kezdete után - függetlenül attól, hogy felhasználásra kerültek-e - nem áll módunkban visszaváltani. Vásárlás során áfás számla igényüket kérjük előre jelezzék! A pénztártól való távozás után reklamációt nem tudunk elfogadni.</p></li>
                        <li><p>Előadásra nincs lehetőség álló jegyet váltani, pótszék nincs, a lépcsőn, földön ülni szigorúan tilos. Termeink fix férőhelyesek, ezen felül jegyet nem adunk ki.</p></li>
                        <li><p>Termeink fix férőhelyesek, ezen felül jegyet nem adunk ki.</p></li>
                    </ul>
                </div>

                <div>
                    <h4>Jegyár, Kedvezmények</h4>
                    <ul>
                        <li><p>Jegyárakról személyesen a választott mozi pénztárában, telefonon az ügyfélszolgálaton keresztül tájékozódhat.</p></li>
                        <li><p>A kedvezményre jogosító okiratot kérjük előre bemutatni.</p></li>
                    </ul>               
                </div>

                <div>
                    <h4>Büfé termékek</h4>
                    <ul>
                        <li><p>A mozi területére csak a büfében vásárolt élelmiszert, italt lehet behozni.</p></li>
                        <li><p>Elmaradt előadás illetve törölt (sztornózott) mozijegy esetén a megvásárolt büfé termékeinek árát visszatéríteni nem áll módunkban.</p></li>
                    </ul>
                </div>

                <div>
                    <h4>Elmaradt, félbeszakadt előadás</h4>
                    <ul>
                        <li><p>Amennyiben az eloadás a mozin kívülálló okok miatt marad el, vagy szakad félbe (vis major, pl. áramszünet, bombariadó, különbözo természeti csapások stb.), a mozi igyekszik tájékoztatni látogatóit az esetleges kártérítés lehetoségeirol és menetérol. Ha a mozi más tájékoztatást nem ad, a mozi az eloadást követo 2 napon át, az eloadásokra szóló jegy ellenében, késobb beváltható, úgynevezett “tiszteletjegy” -et bocsájt ki a jogosultak részére.</p></li>
                        <li><p>Jegyet visszaváltani nem áll módunkban, kivéve: musorváltozás, a moziban felmerülo technikai vagy más okok miatt elmaradt vagy félbeszakadt eloadás esetén, kizárólag az eloadás napján.</p></li>
                    </ul>
                </div>

                <div>
                    <h4>A mozi magánterület</h4>
                    <ul>
                        <li><p>A mozi magánterület, a mozi fenntartja a jogot, hogy bizonyos személyeket saját belátása szerint a területére ne engedjen be, vagy bármikor onnan kizárhasson.</p></li>
                        <li><p>A mozi területére a közbiztonságra veszélyes és/vagy a többi látogató szórakozását zavaró tárgyat bevinni tilos.</p></li>
                        <li><p>A mozi területérol a rendbontó, a többi látogató szórakozását bármilyen módon zavaró (pl. mobil telefon használata az eloadások alatt) látogatókat a mozi személyzetének jogában áll eltávolítani.</p></li>

                    </ul>
                </div>

                <div>
                    <h4>Biztonsági intézkedések</h4>
                    <ul>
                        <li><p>A mozi területe biztonsági kamerarendszerrel van ellátva, melynek képét a mozi megőrizheti és rögzítheti. Ezen felvételeket a mozi saját tulajdona védelmében, károkozás igazolására felhasználhatja, magánszemélynek kiadni, illetve megmutatni viszont csak hatósági eljárás keretén belül hivatalos szerv felszólításának eleget téve köteles.</p></li>
                        <li><p>A menekülési útvonalakat szabadon kell hagyni!</p></li>
                    </ul>
                </div>

                <div>
                    <h4>A mozi felelősségének kizárása</h4>
                    <ul>
                        <li><p>A mozi területén tilos engedély nélkül bármilyen kereskedelmi, áruforgalmi (árusítás stb), illetve promóciós (termékek, szórólapok osztogatása, kihelyezése) tevékenységet folytatni.</p></li>
                        <li><p>A mozi nem vállal felelősséget a személyekben, vagy anyagi értékekben keletkezett károkért, amennyiben azok a Házirend, illetve az általánosan elvárható magatartási szabályok be nem tartásából erednek. Nem vállal felelősséget továbbá a terem területén az elveszett, eltulajdonított tárgyakért, eszközökért. A talált tárgyakat minden vendég a mozi kasszáinál köteles dokumentálás mellett leadni.</p></li>
                        <li><p>A nem a mozi által üzemeltetett technikai berendezésekért (pl. fűtő-, hűtőberendezésért, parkolórendszerért) a mozi felelősséget nem vállal.</p></li>
                        <li><p>A mozi területén kívül eső területekért és azok tisztaságáért a mozi felelősséget nem vállal.</p></li>
                        <li><p> A moziteremben biztosított korlátozott fényviszonyok miatt az alapos takarítás ellenére kérjük, ellenőrizzék az üléseket ülőhelyeik elfoglalását megelőzően, és amennyiben állapotukkal kapcsolatosan bármilyen kifogásuk merülne fel, haladéktalanul jelezzék azt a mozi személyzetének, ellenkező esetben a ruházatban keletkezett károkat nem áll módunkban megtéríteni.</p></li>
                    </ul>
                </div>

                <div>
                    <h4>Állatok a moziban</h4>
                    <ul>
                        <li><p>A mozi területére állatot behozni tilos, kivétel a vakvezető kutya.</p></li>
                    </ul>
                </div>
            </article>

        @endsection

    </body>
</html>