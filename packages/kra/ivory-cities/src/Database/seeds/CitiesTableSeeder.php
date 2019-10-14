<?php

use Illuminate\Database\Seeder;
use Kra\IvoryCities\Models\Cities;
class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commune = array(
            0 => array(
                'name' => 'Abengourou'
            ),
            1 => array(
                'name' => 'Abié'
            ),
            2 => array(
                'name' => 'Abigui'
            ),
            3 => array(
                'name' => 'Abobo'
            ),
            4 => array(
                'name' => 'Aboisso'
            ),
            5 => array(
                'name' => 'Aboisso-Comoé'
            ),
            6 => array(
                'name' => 'Abolikro'
            ),
            7 => array(
                'name' => 'Abongoua'
            ),
            8 => array(
                'name' => 'Abongoua'
            ),
            9 => array(
                'name' => 'Aboudé'
            ),
            10 => array(
                'name' => 'Abra'
            ),
            11 => array(
                'name' => 'Abradinou'
            ),
            12 => array(
                'name' => 'Abronamoué'
            ),
            13 => array(
                'name' => 'Aby (Aboisso)'
            ),
            14 => array(
                'name' => 'Aby-Adjouan-Mohoua'
            ),
            15 => array(
                'name' => 'Adaou'
            ),
            16 => array(
                'name' => 'Addah'
            ),
            17 => array(
                'name' => 'Adessé'
            ),
            18 => array(
                'name' => 'Adiaké'
            ),
            19 => array(
                'name' => 'Adjamé'
            ),
            20 => array(
                'name' => 'Adjaméné'
            ),
            21 => array(
                'name' => 'Adjouan'
            ),
            22 => array(
                'name' => 'Adouakouakro'
            ),
            23 => array(
                'name' => 'Adoukro'
            ),
            24 => array(
                'name' => 'Adzopé'
            ),
            25 => array(
                'name' => 'Affalikro'
            ),
            26 => array(
                'name' => 'Afféry'
            ),
            27 => array(
                'name' => 'Affiénou'
            ),
            28 => array(
                'name' => 'Afotobo'
            ),
            29 => array(
                'name' => 'Agbaou-Ahéoua'
            ),
            30 => array(
                'name' => 'Agboville'
            ),
            31 => array(
                'name' => 'Agnia'
            ),
            32 => array(
                'name' => 'Agnibilékrou'
            ),
            33 => array(
                'name' => 'Agou'
            ),
            34 => array(
                'name' => 'Ahigbé-Koffikro'
            ),
            35 => array(
                'name' => 'Ahouabo-Bouapé'
            ),
            36 => array(
                'name' => 'Ahouakro'
            ),
            37 => array(
                'name' => 'Ahouanou'
            ),
            38 => array(
                'name' => 'Ahougnanssou'
            ),
            39 => array(
                'name' => 'Ahougnassou-Alahou'
            ),
            40 => array(
                'name' => 'Akoboissué'
            ),
            41 => array(
                'name' => 'Akoi N\'denou'
            ),
            42 => array(
                'name' => 'Akounougbé'
            ),
            43 => array(
                'name' => 'Akoupé'
            ),
            44 => array(
                'name' => 'Akoupé-Zeudji'
            ),
            45 => array(
                'name' => 'Akouré'
            ),
            46 => array(
                'name' => 'Akradio'
            ),
            47 => array(
                'name' => 'Akridou-Laddé'
            ),
            48 => array(
                'name' => 'Alépé'
            ),
            49 => array(
                'name' => 'Allangouassou'
            ),
            50 => array(
                'name' => 'Allosso 2'
            ),
            51 => array(
                'name' => 'Amanvi'
            ),
            52 => array(
                'name' => 'Amélékia'
            ),
            53 => array(
                'name' => 'Amian Kouassikro'
            ),
            54 => array(
                'name' => 'Amoriakro'
            ),
            55 => array(
                'name' => 'Ananda (Daoukro)'
            ),
            56 => array(
                'name' => 'Ananguié (Agboville)'
            ),
            57 => array(
                'name' => 'Ananguié (Adzopé)'
            ),
            58 => array(
                'name' => 'Ancien Prozi'
            ),
            59 => array(
                'name' => 'Andé'
            ),
            60 => array(
                'name' => 'Ando-Kékrénou'
            ),
            61 => array(
                'name' => 'Angoda'
            ),
            62 => array(
                'name' => 'Anianou'
            ),
            63 => array(
                'name' => 'Aniassué'
            ),
            64 => array(
                'name' => 'Annépé'
            ),
            65 => array(
                'name' => 'Anno (Agboville)'
            ),
            66 => array(
                'name' => 'Anoumaba'
            ),
            67 => array(
                'name' => 'Anyama'
            ),
            68 => array(
                'name' => 'Appimandoum'
            ),
            69 => array(
                'name' => 'Appoisso'
            ),
            70 => array(
                'name' => 'Appouasso'
            ),
            71 => array(
                'name' => 'Apprompron-Afêwa'
            ),
            72 => array(
                'name' => 'Apprompronou'
            ),
            73 => array(
                'name' => 'Arikokaha'
            ),
            74 => array(
                'name' => 'Arokpa'
            ),
            75 => array(
                'name' => 'Arrah'
            ),
            76 => array(
                'name' => 'Assahara'
            ),
            77 => array(
                'name' => 'Assalé-Kouassikro'
            ),
            78 => array(
                'name' => 'Assandrè'
            ),
            79 => array(
                'name' => 'Assié-Koumassi'
            ),
            80 => array(
                'name' => 'Assikoi'
            ),
            81 => array(
                'name' => 'Assinie-Mafia'
            ),
            82 => array(
                'name' => 'Assuéfry'
            ),
            83 => array(
                'name' => 'Attecoubé'
            ),
            84 => array(
                'name' => 'Attiégouakro'
            ),
            85 => array(
                'name' => 'Attiékoi'
            ),
            86 => array(
                'name' => 'Attiguéhi'
            ),
            87 => array(
                'name' => 'Attinguié'
            ),
            88 => array(
                'name' => 'Attobrou'
            ),
            89 => array(
                'name' => 'Attokro'
            ),
            90 => array(
                'name' => 'Attoutou A'
            ),
            91 => array(
                'name' => 'Ayamé'
            ),
            92 => array(
                'name' => 'Ayaou-Sran'
            ),
            93 => array(
                'name' => 'Ayénouan'
            ),
            94 => array(
                'name' => 'Azaguié'
            ),
            95 => array(
                'name' => 'B'
            ),
            96 => array(
                'name' => 'Babakro'
            ),
            97 => array(
                'name' => 'Bacanda'
            ),
            98 => array(
                'name' => 'Bacon'
            ),
            99 => array(
                'name' => 'Badikaha'
            ),
            100 => array(
                'name' => 'Bagohouo'
            ),
            101 => array(
                'name' => 'Bakandesso-Sogbeni'
            ),
            102 => array(
                'name' => 'Bakanou'
            ),
            103 => array(
                'name' => 'Bako'
            ),
            104 => array(
                'name' => 'Bakoubli'
            ),
            105 => array(
                'name' => 'Baléko'
            ),
            106 => array(
                'name' => 'Bambalouma'
            ),
            107 => array(
                'name' => 'Bamoro'
            ),
            108 => array(
                'name' => 'Bandakagni Tomora'
            ),
            109 => array(
                'name' => 'Bandakagni-Sokoura'
            ),
            110 => array(
                'name' => 'Bandiahi'
            ),
            111 => array(
                'name' => 'Bangolo'
            ),
            112 => array(
                'name' => 'Bangoua'
            ),
            113 => array(
                'name' => 'Banneu'
            ),
            114 => array(
                'name' => 'Bannonfla'
            ),
            115 => array(
                'name' => 'Bassawa'
            ),
            116 => array(
                'name' => 'Baya (Kouto)'
            ),
            117 => array(
                'name' => 'Bayota'
            ),
            118 => array(
                'name' => 'Bazra-Nattis'
            ),
            119 => array(
                'name' => 'Bazré'
            ),
            120 => array(
                'name' => 'Bécédi Brignan'
            ),
            121 => array(
                'name' => 'Bécouéfin'
            ),
            122 => array(
                'name' => 'Bédiala'
            ),
            123 => array(
                'name' => 'Bédy-Goazon'
            ),
            124 => array(
                'name' => 'Bégbessou'
            ),
            125 => array(
                'name' => 'Belleville, (département de Zoukougbeu)'
            ),
            126 => array(
                'name' => 'Bengassou'
            ),
            127 => array(
                'name' => 'Béoué-Zibiao'
            ),
            128 => array(
                'name' => 'Béoumi'
            ),
            129 => array(
                'name' => 'Béréni Dialla'
            ),
            130 => array(
                'name' => 'Bériaboukro'
            ),
            131 => array(
                'name' => 'Bettié'
            ),
            132 => array(
                'name' => 'Biakalé'
            ),
            133 => array(
                'name' => 'Biankouma'
            ),
            134 => array(
                'name' => 'Bianouan'
            ),
            135 => array(
                'name' => 'Biasso'
            ),
            136 => array(
                'name' => 'Biéby'
            ),
            137 => array(
                'name' => 'Bilimono'
            ),
            138 => array(
                'name' => 'Bin-Houyé'
            ),
            139 => array(
                'name' => 'Binao-Boussoué'
            ),
            140 => array(
                'name' => 'Bingerville'
            ),
            141 => array(
                'name' => 'Binzra'
            ),
            142 => array(
                'name' => 'Bla'
            ),
            143 => array(
                'name' => 'Blanfla'
            ),
            144 => array(
                'name' => 'Blapleu'
            ),
            145 => array(
                'name' => 'Bléniméouin'
            ),
            146 => array(
                'name' => 'Blességué'
            ),
            147 => array(
                'name' => 'Bloléquin'
            ),
            148 => array(
                'name' => 'Blotilé'
            ),
            149 => array(
                'name' => 'Boahia'
            ),
            150 => array(
                'name' => 'Bobi'
            ),
            151 => array(
                'name' => 'Bobo-Tiénigbé'
            ),
            152 => array(
                'name' => 'Bocanda'
            ),
            153 => array(
                'name' => 'Bodo (Didiévi)'
            ),
            154 => array(
                'name' => 'Bodo (Tiassalé)'
            ),
            155 => array(
                'name' => 'Bodokro'
            ),
            156 => array(
                'name' => 'Bogofa'
            ),
            157 => array(
                'name' => 'Bogouiné'
            ),
            158 => array(
                'name' => 'Boguédia'
            ),
            159 => array(
                'name' => 'Bohobli'
            ),
            160 => array(
                'name' => 'Bokala-Niampondougou'
            ),
            161 => array(
                'name' => 'Boli'
            ),
            162 => array(
                'name' => 'Bolona'
            ),
            163 => array(
                'name' => 'Bonahouin'
            ),
            164 => array(
                'name' => 'Bondo'
            ),
            165 => array(
                'name' => 'Bondoukou'
            ),
            166 => array(
                'name' => 'Bongo (Grand-Bassam)'
            ),
            167 => array(
                'name' => 'Bongouanou'
            ),
            168 => array(
                'name' => 'Bonguéra'
            ),
            169 => array(
                'name' => 'Boniérédougou'
            ),
            170 => array(
                'name' => 'Bonikro'
            ),
            171 => array(
                'name' => 'Bonon'
            ),
            172 => array(
                'name' => 'Bonoua'
            ),
            173 => array(
                'name' => 'Bonoufla'
            ),
            174 => array(
                'name' => 'Booko'
            ),
            175 => array(
                'name' => 'Boron (Korhogo)'
            ),
            176 => array(
                'name' => 'Borotou'
            ),
            177 => array(
                'name' => 'Borotou-Koro'
            ),
            178 => array(
                'name' => 'Botindé'
            ),
            179 => array(
                'name' => 'Botro'
            ),
            180 => array(
                'name' => 'Bouadikro'
            ),
            181 => array(
                'name' => 'Bouaflé'
            ),
            182 => array(
                'name' => 'Bouandougou'
            ),
            183 => array(
                'name' => 'Bouboury'
            ),
            184 => array(
                'name' => 'Boudépé'
            ),
            185 => array(
                'name' => 'Bougou'
            ),
            186 => array(
                'name' => 'Bougousso'
            ),
            187 => array(
                'name' => 'Bouko'
            ),
            188 => array(
                'name' => 'Bouna'
            ),
            189 => array(
                'name' => 'Boundiali'
            ),
            190 => array(
                'name' => 'Boyaokro'
            ),
            191 => array(
                'name' => 'Bozi'
            ),
            192 => array(
                'name' => 'Bricolo'
            ),
            193 => array(
                'name' => 'Brihiri'
            ),
            194 => array(
                'name' => 'Brima'
            ),
            195 => array(
                'name' => 'Brobo'
            ),
            196 => array(
                'name' => 'Brofodoumé'
            ),
            197 => array(
                'name' => 'Broma'
            ),
            198 => array(
                'name' => 'Brou Ahoussoukro'
            ),
            199 => array(
                'name' => 'Brou Akpaoussou'
            ),
            200 => array(
                'name' => 'Broubrou'
            ),
            201 => array(
                'name' => 'Broudoukou-Penda'
            ),
            202 => array(
                'name' => 'Buyo (Côte d\'Ivoire)'
            ),
            203 => array(
                'name' => 'C'
            ),
            204 => array(
                'name' => 'Céchi'
            ),
            205 => array(
                'name' => 'Chiépo'
            ),
            206 => array(
                'name' => 'Cocody'
            ),
            207 => array(
                'name' => 'Cosrou'
            ),
            208 => array(
                'name' => 'D'
            ),
            209 => array(
                'name' => 'Dabadougou-Mafélé'
            ),
            210 => array(
                'name' => 'Dabakala'
            ),
            211 => array(
                'name' => 'Dabou'
            ),
            212 => array(
                'name' => 'Dabouyo'
            ),
            213 => array(
                'name' => 'Dadiassé'
            ),
            214 => array(
                'name' => 'Dagba'
            ),
            215 => array(
                'name' => 'Dah-Zagna'
            ),
            216 => array(
                'name' => 'Dahiépa-Kéhi'
            ),
            217 => array(
                'name' => 'Dahiri'
            ),
            218 => array(
                'name' => 'Dairo-Didizo'
            ),
            219 => array(
                'name' => 'Dakouritrohoin'
            ),
            220 => array(
                'name' => 'Dakpadou'
            ),
            221 => array(
                'name' => 'Daleu'
            ),
            222 => array(
                'name' => 'Damé'
            ),
            223 => array(
                'name' => 'Danané'
            ),
            224 => array(
                'name' => 'Dananon'
            ),
            225 => array(
                'name' => 'Dandougou'
            ),
            226 => array(
                'name' => 'Danguira'
            ),
            227 => array(
                'name' => 'Dania'
            ),
            228 => array(
                'name' => 'Danoa'
            ),
            229 => array(
                'name' => 'Dantogo'
            ),
            230 => array(
                'name' => 'Daoukro'
            ),
            231 => array(
                'name' => 'Dapéoua'
            ),
            232 => array(
                'name' => 'Dapo-Iboké'
            ),
            233 => array(
                'name' => 'Dassioko'
            ),
            234 => array(
                'name' => 'Dassoungboho'
            ),
            235 => array(
                'name' => 'Débété'
            ),
            236 => array(
                'name' => 'Dèdègbeu'
            ),
            237 => array(
                'name' => 'Détroya'
            ),
            238 => array(
                'name' => 'Diabo'
            ),
            239 => array(
                'name' => 'Diahouin'
            ),
            240 => array(
                'name' => 'Dialakoro'
            ),
            241 => array(
                'name' => 'Diamakani'
            ),
            242 => array(
                'name' => 'Diamarakro'
            ),
            243 => array(
                'name' => 'Diamba'
            ),
            244 => array(
                'name' => 'Diangobo (Abengourou)'
            ),
            245 => array(
                'name' => 'Diangobo (Yakassé-Attobrou)'
            ),
            246 => array(
                'name' => 'Diangokro'
            ),
            247 => array(
                'name' => 'Dianra'
            ),
            248 => array(
                'name' => 'Dianra-Village'
            ),
            249 => array(
                'name' => 'Diarabana'
            ),
            250 => array(
                'name' => 'Diasson'
            ),
            251 => array(
                'name' => 'Diawala'
            ),
            252 => array(
                'name' => 'Dibobly'
            ),
            253 => array(
                'name' => 'Diboké'
            ),
            254 => array(
                'name' => 'Dibri-Assirikro'
            ),
            255 => array(
                'name' => 'Didiévi'
            ),
            256 => array(
                'name' => 'Didoko'
            ),
            257 => array(
                'name' => 'Diégonéfla'
            ),
            258 => array(
                'name' => 'Diéméressédougou'
            ),
            259 => array(
                'name' => 'Diéouzon'
            ),
            260 => array(
                'name' => 'Diéviéssou'
            ),
            261 => array(
                'name' => 'Digbapia'
            ),
            262 => array(
                'name' => 'Dignago'
            ),
            263 => array(
                'name' => 'Dikodougou'
            ),
            264 => array(
                'name' => 'Dimandougou'
            ),
            265 => array(
                'name' => 'Dimbokro'
            ),
            266 => array(
                'name' => 'Dinaoudi'
            ),
            267 => array(
                'name' => 'Dingbi'
            ),
            268 => array(
                'name' => 'Dioman'
            ),
            269 => array(
                'name' => 'Dioulatièdougou'
            ),
            270 => array(
                'name' => 'Diourouzon'
            ),
            271 => array(
                'name' => 'Divo'
            ),
            272 => array(
                'name' => 'Djamadjoké'
            ),
            273 => array(
                'name' => 'Djapadji'
            ),
            274 => array(
                'name' => 'Djébonouan'
            ),
            275 => array(
                'name' => 'Djékanou'
            ),
            276 => array(
                'name' => 'Djibrosso'
            ),
            277 => array(
                'name' => 'Djidji'
            ),
            278 => array(
                'name' => 'Djoro-Djoro'
            ),
            279 => array(
                'name' => 'Djouroutou'
            ),
            280 => array(
                'name' => 'Doba (Côte d\'Ivoire)'
            ),
            281 => array(
                'name' => 'Dobré'
            ),
            282 => array(
                'name' => 'Dogbo'
            ),
            283 => array(
                'name' => 'Doh (Touba)'
            ),
            284 => array(
                'name' => 'Doké'
            ),
            285 => array(
                'name' => 'Domangbeu'
            ),
            286 => array(
                'name' => 'Doropo'
            ),
            287 => array(
                'name' => 'Douèlé'
            ),
            288 => array(
                'name' => 'Dougroupalégnoa'
            ),
            289 => array(
                'name' => 'Doukouya'
            ),
            290 => array(
                'name' => 'Doukouyo'
            ),
            291 => array(
                'name' => 'Dousséba'
            ),
            292 => array(
                'name' => 'Dribouo'
            ),
            293 => array(
                'name' => 'Dualla'
            ),
            294 => array(
                'name' => 'Duékoué'
            ),
            295 => array(
                'name' => 'Duffrébo'
            ),
            296 => array(
                'name' => 'Duonfla'
            ),
            297 => array(
                'name' => 'Dzeudji'
            ),
            298 => array(
                'name' => 'E'
            ),
            299 => array(
                'name' => 'Ebikro-N’dakro'
            ),
            300 => array(
                'name' => 'Ebilassokro'
            ),
            301 => array(
                'name' => 'Ebonou'
            ),
            302 => array(
                'name' => 'Eboué (Aboisso)'
            ),
            303 => array(
                'name' => 'Ehuasso'
            ),
            304 => array(
                'name' => 'Ellibou-Badasso'
            ),
            305 => array(
                'name' => 'Eloka'
            ),
            306 => array(
                'name' => 'Ettrokro'
            ),
            307 => array(
                'name' => 'Etuéboué'
            ),
            308 => array(
                'name' => 'Etuessika'
            ),
            309 => array(
                'name' => 'F'
            ),
            310 => array(
                'name' => 'Facobly'
            ),
            311 => array(
                'name' => 'Fadiadougou'
            ),
            312 => array(
                'name' => 'Famienkro'
            ),
            313 => array(
                'name' => 'Fapaha-M’binguébougou'
            ),
            314 => array(
                'name' => 'Faraba (Mankono)'
            ),
            315 => array(
                'name' => 'Fengolo'
            ),
            316 => array(
                'name' => 'Férémandougou'
            ),
            317 => array(
                'name' => 'Férentéla'
            ),
            318 => array(
                'name' => 'Ferkessédougou'
            ),
            319 => array(
                'name' => 'Finessiguédougou'
            ),
            320 => array(
                'name' => 'Fizanlouma'
            ),
            321 => array(
                'name' => 'Flakièdougou'
            ),
            322 => array(
                'name' => 'Foto-Kouamékro'
            ),
            323 => array(
                'name' => 'Foumbolo'
            ),
            324 => array(
                'name' => 'Foungbesso'
            ),
            325 => array(
                'name' => 'Frambo'
            ),
            326 => array(
                'name' => 'Fresco'
            ),
            327 => array(
                'name' => 'Fronan'
            ),
            328 => array(
                'name' => 'G'
            ),
            329 => array(
                'name' => 'Gabia (Issia)'
            ),
            330 => array(
                'name' => 'Gabia (Oumé)'
            ),
            331 => array(
                'name' => 'Gabiadji'
            ),
            332 => array(
                'name' => 'Gadago'
            ),
            333 => array(
                'name' => 'Gagnoa'
            ),
            334 => array(
                'name' => 'Gagny (Côte d\'Ivoire)'
            ),
            335 => array(
                'name' => 'Galébou'
            ),
            336 => array(
                'name' => 'Ganaoni'
            ),
            337 => array(
                'name' => 'Ganhoué'
            ),
            338 => array(
                'name' => 'Ganleu'
            ),
            339 => array(
                'name' => 'Gaoté'
            ),
            340 => array(
                'name' => 'Gbablasso'
            ),
            341 => array(
                'name' => 'Gbadjié'
            ),
            342 => array(
                'name' => 'Gbagbam'
            ),
            343 => array(
                'name' => 'Gbamélédougo'
            ),
            344 => array(
                'name' => 'Gbangbégouiné'
            ),
            345 => array(
                'name' => 'Gbangbégouiné-Yati'
            ),
            346 => array(
                'name' => 'Gbapleu'
            ),
            347 => array(
                'name' => 'Gbatongouin'
            ),
            348 => array(
                'name' => 'Gbazoa'
            ),
            349 => array(
                'name' => 'Gbèkèkro'
            ),
            350 => array(
                'name' => 'Gbéléban'
            ),
            351 => array(
                'name' => 'Gbétogo'
            ),
            352 => array(
                'name' => 'Gbliglo'
            ),
            353 => array(
                'name' => 'Gbofesso-Sama'
            ),
            354 => array(
                'name' => 'Gbogolo'
            ),
            355 => array(
                'name' => 'Gboguhé'
            ),
            356 => array(
                'name' => 'Gbon'
            ),
            357 => array(
                'name' => 'Gbon-Houyé'
            ),
            358 => array(
                'name' => 'Gbongaha'
            ),
            359 => array(
                'name' => 'Gbonné'
            ),
            360 => array(
                'name' => 'Glangleu'
            ),
            361 => array(
                'name' => 'Gligbeuadji'
            ),
            362 => array(
                'name' => 'Gloplou'
            ),
            363 => array(
                'name' => 'Gnagbodougnoa'
            ),
            364 => array(
                'name' => 'Gnagboya'
            ),
            365 => array(
                'name' => 'Gnago'
            ),
            366 => array(
                'name' => 'Gnakouboué'
            ),
            367 => array(
                'name' => 'Gnamanou'
            ),
            368 => array(
                'name' => 'Gnato'
            ),
            369 => array(
                'name' => 'Gnégrouboué'
            ),
            370 => array(
                'name' => 'Gnogboyo'
            ),
            371 => array(
                'name' => 'Godélilié 1'
            ),
            372 => array(
                'name' => 'Gogné'
            ),
            373 => array(
                'name' => 'Gogo'
            ),
            374 => array(
                'name' => 'Gogoguhé'
            ),
            375 => array(
                'name' => 'Gohitafla'
            ),
            376 => array(
                'name' => 'Gohouo-Zagna'
            ),
            377 => array(
                'name' => 'Gomon'
            ),
            378 => array(
                'name' => 'Gonaté'
            ),
            379 => array(
                'name' => 'Gopoupleu'
            ),
            380 => array(
                'name' => 'Gotongouiné 1'
            ),
            381 => array(
                'name' => 'Gouané'
            ),
            382 => array(
                'name' => 'Goudi'
            ),
            383 => array(
                'name' => 'Goudouko'
            ),
            384 => array(
                'name' => 'Gouékan'
            ),
            385 => array(
                'name' => 'Gouenzou'
            ),
            386 => array(
                'name' => 'Gouiné'
            ),
            387 => array(
                'name' => 'Goulaleu'
            ),
            388 => array(
                'name' => 'Goulia'
            ),
            389 => array(
                'name' => 'Gouméré'
            ),
            390 => array(
                'name' => 'Gouotro'
            ),
            391 => array(
                'name' => 'Gourané'
            ),
            392 => array(
                'name' => 'Gra'
            ),
            393 => array(
                'name' => 'Grabo'
            ),
            394 => array(
                'name' => 'Gragba-Dagolilié'
            ),
            395 => array(
                'name' => 'Grand Alépé'
            ),
            396 => array(
                'name' => 'Grand-Bassam'
            ),
            397 => array(
                'name' => 'Grand-Béréby'
            ),
            398 => array(
                'name' => 'Grand-Lahou'
            ),
            399 => array(
                'name' => 'Grand-Morié'
            ),
            400 => array(
                'name' => 'Grand-Pin'
            ),
            401 => array(
                'name' => 'Grand-Yapo'
            ),
            402 => array(
                'name' => 'Grand-Zattry'
            ),
            403 => array(
                'name' => 'Grand-Akoudzin'
            ),
            404 => array(
                'name' => 'Grégbeu'
            ),
            405 => array(
                'name' => 'Grihiri'
            ),
            406 => array(
                'name' => 'Grobiakoko'
            ),
            407 => array(
                'name' => 'Grobonou-Dan'
            ),
            408 => array(
                'name' => 'Guéhiébly'
            ),
            409 => array(
                'name' => 'Guékpé'
            ),
            410 => array(
                'name' => 'Guénimanzo'
            ),
            411 => array(
                'name' => 'Guépahouo'
            ),
            412 => array(
                'name' => 'Guessabo'
            ),
            413 => array(
                'name' => 'Guessiguié'
            ),
            414 => array(
                'name' => 'Guéyo'
            ),
            415 => array(
                'name' => 'Guézon (Duékoué)'
            ),
            416 => array(
                'name' => 'Guézon (Kouibly)'
            ),
            417 => array(
                'name' => 'Guézon-Tahouaké'
            ),
            418 => array(
                'name' => 'Guiamapleu'
            ),
            419 => array(
                'name' => 'Guibéroua'
            ),
            420 => array(
                'name' => 'Guiembé'
            ),
            421 => array(
                'name' => 'Guiendé'
            ),
            422 => array(
                'name' => 'Guiglo'
            ),
            423 => array(
                'name' => 'Guiméyo'
            ),
            424 => array(
                'name' => 'Guinglo-Gbéan'
            ),
            425 => array(
                'name' => 'Guinglo-Tahouaké'
            ),
            426 => array(
                'name' => 'Guintéguéla'
            ),
            427 => array(
                'name' => 'Guitry'
            ),
            428 => array(
                'name' => 'H'
            ),
            429 => array(
                'name' => 'Hérébo'
            ),
            430 => array(
                'name' => 'Hermankono-Diès'
            ),
            431 => array(
                'name' => 'Hermankono-Garo'
            ),
            432 => array(
                'name' => 'Hiré'
            ),
            433 => array(
                'name' => 'Huafla'
            ),
            434 => array(
                'name' => 'I'
            ),
            435 => array(
                'name' => 'Iboguhé'
            ),
            436 => array(
                'name' => 'Iboké'
            ),
            437 => array(
                'name' => 'Idibouo-Zépréguhé (Daloa Est)'
            ),
            438 => array(
                'name' => 'Ipouagui'
            ),
            439 => array(
                'name' => 'Iriéfla'
            ),
            440 => array(
                'name' => 'Irobo'
            ),
            441 => array(
                'name' => 'Iroporia'
            ),
            442 => array(
                'name' => 'Issia'
            ),
            443 => array(
                'name' => 'J'
            ),
            444 => array(
                'name' => 'Jacqueville'
            ),
            445 => array(
                'name' => 'K'
            ),
            446 => array(
                'name' => 'Kaadé'
            ),
            447 => array(
                'name' => 'Kadéko'
            ),
            448 => array(
                'name' => 'Kadioha'
            ),
            449 => array(
                'name' => 'Kafoudougou-Bambarasso'
            ),
            450 => array(
                'name' => 'Kagbolodougou'
            ),
            451 => array(
                'name' => 'Kahin-Zarabaon'
            ),
            452 => array(
                'name' => 'Kakpi'
            ),
            453 => array(
                'name' => 'Kalaha'
            ),
            454 => array(
                'name' => 'Kalamon'
            ),
            455 => array(
                'name' => 'Kaloa'
            ),
            456 => array(
                'name' => 'Kamala'
            ),
            457 => array(
                'name' => 'Kamalo'
            ),
            458 => array(
                'name' => 'Kamoro'
            ),
            459 => array(
                'name' => 'Kanagonon'
            ),
            460 => array(
                'name' => 'Kanakono'
            ),
            461 => array(
                'name' => 'Kanawolo'
            ),
            462 => array(
                'name' => 'Kani'
            ),
            463 => array(
                'name' => 'Kaniasso'
            ),
            464 => array(
                'name' => 'Kanoroba'
            ),
            465 => array(
                'name' => 'Kanzra'
            ),
            466 => array(
                'name' => 'Kaouara'
            ),
            467 => array(
                'name' => 'Karakoro'
            ),
            468 => array(
                'name' => 'Kasséré'
            ),
            469 => array(
                'name' => 'Katchiré-Essékro'
            ),
            470 => array(
                'name' => 'Katiali'
            ),
            471 => array(
                'name' => 'Katimassou'
            ),
            472 => array(
                'name' => 'Katiola'
            ),
            473 => array(
                'name' => 'Kato (Séguéla)'
            ),
            474 => array(
                'name' => 'Katogo'
            ),
            475 => array(
                'name' => 'Kawolo-Sobara'
            ),
            476 => array(
                'name' => 'Ké-Bouébo'
            ),
            477 => array(
                'name' => 'Kébi'
            ),
            478 => array(
                'name' => 'Kéibla'
            ),
            479 => array(
                'name' => 'Kéibly'
            ),
            480 => array(
                'name' => 'Kétesso'
            ),
            481 => array(
                'name' => 'Kétro-Bassam'
            ),
            482 => array(
                'name' => 'Kibouo'
            ),
            483 => array(
                'name' => 'Kiélé'
            ),
            484 => array(
                'name' => 'Kiémou'
            ),
            485 => array(
                'name' => 'Kimbirila Nord'
            ),
            486 => array(
                'name' => 'Kimbirila Sud'
            ),
            487 => array(
                'name' => 'Klan'
            ),
            488 => array(
                'name' => 'Kodiossou'
            ),
            489 => array(
                'name' => 'Koffi-Amonkro'
            ),
            490 => array(
                'name' => 'Koffikro-Afféma'
            ),
            491 => array(
                'name' => 'Koko (Bouaké)'
            ),
            492 => array(
                'name' => 'Koko (Korhogo)'
            ),
            493 => array(
                'name' => 'Kokolopozo'
            ),
            494 => array(
                'name' => 'Kokomian'
            ),
            495 => array(
                'name' => 'Kokoumba'
            ),
            496 => array(
                'name' => 'Kokoun'
            ),
            497 => array(
                'name' => 'Kokumbo'
            ),
            498 => array(
                'name' => 'Kolia'
            ),
            499 => array(
                'name' => 'Kombolokoura'
            ),
            500 => array(
                'name' => 'Komborodougou'
            ),
            501 => array(
                'name' => 'Konan Kokorékro'
            ),
            502 => array(
                'name' => 'Konan-N’drikro'
            ),
            503 => array(
                'name' => 'Konandikro'
            ),
            504 => array(
                'name' => 'Kondiébouma'
            ),
            505 => array(
                'name' => 'Kondokro-Djassanou'
            ),
            506 => array(
                'name' => 'Kondossou'
            ),
            507 => array(
                'name' => 'Kondrobo'
            ),
            508 => array(
                'name' => 'Kong'
            ),
            509 => array(
                'name' => 'Kongasso'
            ),
            510 => array(
                'name' => 'Kongoti'
            ),
            511 => array(
                'name' => 'Koni'
            ),
            512 => array(
                'name' => 'Kononfla'
            ),
            513 => array(
                'name' => 'Koonan'
            ),
            514 => array(
                'name' => 'Koréahinou'
            ),
            515 => array(
                'name' => 'Koro (Côte d\'Ivoire)'
            ),
            516 => array(
                'name' => 'Korokaha'
            ),
            517 => array(
                'name' => 'Korokopla'
            ),
            518 => array(
                'name' => 'Koroumba'
            ),
            519 => array(
                'name' => 'Kossandji'
            ),
            520 => array(
                'name' => 'Kosséhoa'
            ),
            521 => array(
                'name' => 'Kossihouen'
            ),
            522 => array(
                'name' => 'Kossou'
            ),
            523 => array(
                'name' => 'Kotobi'
            ),
            524 => array(
                'name' => 'Kotogwanda'
            ),
            525 => array(
                'name' => 'Kotronou'
            ),
            526 => array(
                'name' => 'Koua'
            ),
            527 => array(
                'name' => 'Kouadioblékro'
            ),
            528 => array(
                'name' => 'Kouadiokro'
            ),
            529 => array(
                'name' => 'Kouafo-Akidom'
            ),
            530 => array(
                'name' => 'Kouakro'
            ),
            531 => array(
                'name' => 'Kouaméfla'
            ),
            532 => array(
                'name' => 'Kouan-Houlé'
            ),
            533 => array(
                'name' => 'Kouassi-Datèkro'
            ),
            534 => array(
                'name' => 'Kouassi Kouassikro'
            ),
            535 => array(
                'name' => 'Kouassi-N’Dawa'
            ),
            536 => array(
                'name' => 'Kouassia-Nanguni'
            ),
            537 => array(
                'name' => 'Kouatta'
            ),
            538 => array(
                'name' => 'Koudougou'
            ),
            539 => array(
                'name' => 'Kouétinfla'
            ),
            540 => array(
                'name' => 'Kouibly'
            ),
            541 => array(
                'name' => 'Koulalé'
            ),
            542 => array(
                'name' => 'Koulikoro (Biankouma)'
            ),
            543 => array(
                'name' => 'Koumassi'
            ),
            544 => array(
                'name' => 'Koumbala'
            ),
            545 => array(
                'name' => 'Koun-Fao'
            ),
            546 => array(
                'name' => 'Kounahiri'
            ),
            547 => array(
                'name' => 'Kounzié'
            ),
            548 => array(
                'name' => 'Kouto'
            ),
            549 => array(
                'name' => 'Koutouba'
            ),
            550 => array(
                'name' => 'Koutoukro 1 bord'
            ),
            551 => array(
                'name' => 'koutoukro 2'
            ),
            552 => array(
                'name' => 'Koyékro'
            ),
            553 => array(
                'name' => 'Koziayo 1'
            ),
            554 => array(
                'name' => 'Kpada'
            ),
            555 => array(
                'name' => 'Kpana-Kalo'
            ),
            556 => array(
                'name' => 'Kpanan'
            ),
            557 => array(
                'name' => 'Kpanpleu-Sin-Houyé'
            ),
            558 => array(
                'name' => 'Kpapékou'
            ),
            559 => array(
                'name' => 'Kpata'
            ),
            560 => array(
                'name' => 'Kpèbo'
            ),
            561 => array(
                'name' => 'Kpotè'
            ),
            562 => array(
                'name' => 'Kpouèbo'
            ),
            563 => array(
                'name' => 'Krégbé'
            ),
            564 => array(
                'name' => 'Kreuzoukoué'
            ),
            565 => array(
                'name' => 'Krindjabo'
            ),
            566 => array(
                'name' => 'Krofoinsou'
            ),
            567 => array(
                'name' => 'L'
            ),
            568 => array(
                'name' => 'Labokro'
            ),
            569 => array(
                'name' => 'Lafokpokaha'
            ),
            570 => array(
                'name' => 'Lahou Kpandah'
            ),
            571 => array(
                'name' => 'Lahouda'
            ),
            572 => array(
                'name' => 'Lakota'
            ),
            573 => array(
                'name' => 'Lamékaha (Ferkessédougou)'
            ),
            574 => array(
                'name' => 'Lamékaha (Korhogo)'
            ),
            575 => array(
                'name' => 'Landiougou'
            ),
            576 => array(
                'name' => 'Languibonou'
            ),
            577 => array(
                'name' => 'Laoudi-Ba'
            ),
            578 => array(
                'name' => 'Larabia'
            ),
            579 => array(
                'name' => 'Lataha'
            ),
            580 => array(
                'name' => 'Lauzoua'
            ),
            581 => array(
                'name' => 'Léléblé'
            ),
            582 => array(
                'name' => 'Lengbrè'
            ),
            583 => array(
                'name' => 'Lessiri'
            ),
            584 => array(
                'name' => 'Ligrohoin'
            ),
            585 => array(
                'name' => 'Liliy'
            ),
            586 => array(
                'name' => 'Lissolo-Sobara'
            ),
            587 => array(
                'name' => 'Lobakuya'
            ),
            588 => array(
                'name' => 'Lobogba'
            ),
            589 => array(
                'name' => 'Logbonou'
            ),
            590 => array(
                'name' => 'Logoualé'
            ),
            591 => array(
                'name' => 'Logroan (Daloa Sud)'
            ),
            592 => array(
                'name' => 'Lolobo (Béoumi)'
            ),
            593 => array(
                'name' => 'Lolobo (Yamoussoukro)'
            ),
            594 => array(
                'name' => 'Lomokankro'
            ),
            595 => array(
                'name' => 'Lopou'
            ),
            596 => array(
                'name' => 'Loukou-Yaokro'
            ),
            597 => array(
                'name' => 'Loviguié'
            ),
            598 => array(
                'name' => 'Luénoufla'
            ),
            599 => array(
                'name' => 'M'
            ),
            600 => array(
                'name' => 'M’bahiakro'
            ),
            601 => array(
                'name' => 'M’batto'
            ),
            602 => array(
                'name' => 'M’bengué'
            ),
            603 => array(
                'name' => 'M’bonoua'
            ),
            604 => array(
                'name' => 'M’Borla-Dioulasso'
            ),
            605 => array(
                'name' => 'M’brou'
            ),
            606 => array(
                'name' => 'M’possa'
            ),
            607 => array(
                'name' => 'Mabéhiri 1'
            ),
            608 => array(
                'name' => 'Mabouo'
            ),
            609 => array(
                'name' => 'Madinani'
            ),
            610 => array(
                'name' => 'Maféré'
            ),
            611 => array(
                'name' => 'Maguéhio'
            ),
            612 => array(
                'name' => 'Mahalé'
            ),
            613 => array(
                'name' => 'Mahandiana Soukourani'
            ),
            614 => array(
                'name' => 'Mahandougou'
            ),
            615 => array(
                'name' => 'Mahapleu'
            ),
            616 => array(
                'name' => 'Mahino'
            ),
            617 => array(
                'name' => 'Makey-Liboli'
            ),
            618 => array(
                'name' => 'Mamini'
            ),
            619 => array(
                'name' => 'Maminigui'
            ),
            620 => array(
                'name' => 'Man'
            ),
            621 => array(
                'name' => 'Manabri'
            ),
            622 => array(
                'name' => 'Mandougou'
            ),
            623 => array(
                'name' => 'Manfla'
            ),
            624 => array(
                'name' => 'Mangouin-Yrongouin'
            ),
            625 => array(
                'name' => 'Mankono'
            ),
            626 => array(
                'name' => 'Mantongouiné'
            ),
            627 => array(
                'name' => 'Manzanouan'
            ),
            628 => array(
                'name' => 'Marabadiassa'
            ),
            629 => array(
                'name' => 'Marandallah'
            ),
            630 => array(
                'name' => 'Marcory'
            ),
            631 => array(
                'name' => 'Massadougou'
            ),
            632 => array(
                'name' => 'Massala (Séguéla)'
            ),
            633 => array(
                'name' => 'Massala-Barala'
            ),
            634 => array(
                'name' => 'Mayo'
            ),
            635 => array(
                'name' => 'Méagui'
            ),
            636 => array(
                'name' => 'Médon'
            ),
            637 => array(
                'name' => 'Mékro'
            ),
            638 => array(
                'name' => 'Memni'
            ),
            639 => array(
                'name' => 'Ménéké'
            ),
            640 => array(
                'name' => 'Méo'
            ),
            641 => array(
                'name' => 'Miadzin'
            ),
            642 => array(
                'name' => 'Mignoré'
            ),
            643 => array(
                'name' => 'Minfla'
            ),
            644 => array(
                'name' => 'Minignan'
            ),
            645 => array(
                'name' => 'Moapé'
            ),
            646 => array(
                'name' => 'Molonou'
            ),
            647 => array(
                'name' => 'Molonou-Blé'
            ),
            648 => array(
                'name' => 'Momirasso'
            ),
            649 => array(
                'name' => 'Monga'
            ),
            650 => array(
                'name' => 'Mongbara'
            ),
            651 => array(
                'name' => 'Monoko Zohi'
            ),
            652 => array(
                'name' => 'Monongo'
            ),
            653 => array(
                'name' => 'Mont Korhogo'
            ),
            654 => array(
                'name' => 'Morokinkro'
            ),
            655 => array(
                'name' => 'Morokro'
            ),
            656 => array(
                'name' => 'Morondo'
            ),
            657 => array(
                'name' => 'Moronou'
            ),
            658 => array(
                'name' => 'Moussobadougou'
            ),
            659 => array(
                'name' => 'N'
            ),
            660 => array(
                'name' => 'N’dakro'
            ),
            661 => array(
                'name' => 'N’dénou'
            ),
            662 => array(
                'name' => 'N’déou'
            ),
            663 => array(
                'name' => 'N’douci'
            ),
            664 => array(
                'name' => 'N’douffoukankro'
            ),
            665 => array(
                'name' => 'N’doukahakro'
            ),
            666 => array(
                'name' => 'N’gangoro-Attoutou'
            ),
            667 => array(
                'name' => 'N’Ganon'
            ),
            668 => array(
                'name' => 'N’Gattadolikro'
            ),
            669 => array(
                'name' => 'N’Gattakro'
            ),
            670 => array(
                'name' => 'N’Gban Kassê'
            ),
            671 => array(
                'name' => 'N’gohinou'
            ),
            672 => array(
                'name' => 'N’Goloblasso'
            ),
            673 => array(
                'name' => 'N’gribo-Takikro'
            ),
            674 => array(
                'name' => 'N’guessan-Brindoukro'
            ),
            675 => array(
                'name' => 'N’Guessankro'
            ),
            676 => array(
                'name' => 'N’Guessankro'
            ),
            677 => array(
                'name' => 'N’guiémé'
            ),
            678 => array(
                'name' => 'N’Guyakro'
            ),
            679 => array(
                'name' => 'N’Zécrézessou'
            ),
            680 => array(
                'name' => 'N’Zi-N’Ziblékro'
            ),
            681 => array(
                'name' => 'N’Zianouan'
            ),
            682 => array(
                'name' => 'N’Zué-Kokoré'
            ),
            683 => array(
                'name' => 'Nafana (Ferkessédougou)'
            ),
            684 => array(
                'name' => 'Nafana (Prikro)'
            ),
            685 => array(
                'name' => 'Nafana Sienso'
            ),
            686 => array(
                'name' => 'Nafoun'
            ),
            687 => array(
                'name' => 'Nahio'
            ),
            688 => array(
                'name' => 'Namahounondougou'
            ),
            689 => array(
                'name' => 'Namané'
            ),
            690 => array(
                'name' => 'Namassi'
            ),
            691 => array(
                'name' => 'Nambingué'
            ),
            692 => array(
                'name' => 'Nandjélé-Ségbéré'
            ),
            693 => array(
                'name' => 'Napié'
            ),
            694 => array(
                'name' => 'Nassian'
            ),
            695 => array(
                'name' => 'Nébo (Divo)'
            ),
            696 => array(
                'name' => 'Néguépié'
            ),
            697 => array(
                'name' => 'Néko'
            ),
            698 => array(
                'name' => 'Nézobly'
            ),
            699 => array(
                'name' => 'Niablé'
            ),
            700 => array(
                'name' => 'Niakaramandougou'
            ),
            701 => array(
                'name' => 'Niakoblognoa'
            ),
            702 => array(
                'name' => 'Niamana (Odienné)'
            ),
            703 => array(
                'name' => 'Niambézaria'
            ),
            704 => array(
                'name' => 'Niazaroko'
            ),
            705 => array(
                'name' => 'Nidrou'
            ),
            706 => array(
                'name' => 'Niédiékaha'
            ),
            707 => array(
                'name' => 'Niellé'
            ),
            708 => array(
                'name' => 'Niéméné'
            ),
            709 => array(
                'name' => 'Nigui Assoko'
            ),
            710 => array(
                'name' => 'Nigui Saff'
            ),
            711 => array(
                'name' => 'Niofoin'
            ),
            712 => array(
                'name' => 'Niokosso'
            ),
            713 => array(
                'name' => 'Niorouhio'
            ),
            714 => array(
                'name' => 'Niouldé'
            ),
            715 => array(
                'name' => 'Nizahon'
            ),
            716 => array(
                'name' => 'Noé (Tiapoum)'
            ),
            717 => array(
                'name' => 'Nofou'
            ),
            718 => array(
                'name' => 'Nouamou'
            ),
            719 => array(
                'name' => 'O'
            ),
            720 => array(
                'name' => 'Odienné'
            ),
            721 => array(
                'name' => 'Offa (Agboville)'
            ),
            722 => array(
                'name' => 'Offoumpo'
            ),
            723 => array(
                'name' => 'Oghlwapo'
            ),
            724 => array(
                'name' => 'Ogoudou'
            ),
            725 => array(
                'name' => 'Okrouyo'
            ),
            726 => array(
                'name' => 'Olodio'
            ),
            727 => array(
                'name' => 'Ondéfidouo'
            ),
            728 => array(
                'name' => 'Ono'
            ),
            729 => array(
                'name' => 'Orbaff'
            ),
            730 => array(
                'name' => 'Oress-Krobou'
            ),
            731 => array(
                'name' => 'Ottawa'
            ),
            732 => array(
                'name' => 'Ottopé'
            ),
            733 => array(
                'name' => 'Ouangolodougou'
            ),
            734 => array(
                'name' => 'Ouaninou'
            ),
            735 => array(
                'name' => 'Ouattaradougou'
            ),
            736 => array(
                'name' => 'Ouédallah'
            ),
            737 => array(
                'name' => 'Ouellé'
            ),
            738 => array(
                'name' => 'Ouéoulo'
            ),
            739 => array(
                'name' => 'Ouffouédiékro'
            ),
            740 => array(
                'name' => 'Oumé'
            ),
            741 => array(
                'name' => 'Oupoyo'
            ),
            742 => array(
                'name' => 'Ouragahio'
            ),
            743 => array(
                'name' => 'Ouréguékaha'
            ),
            744 => array(
                'name' => 'Ousrou'
            ),
            745 => array(
                'name' => 'Ouyably-Gnondrou'
            ),
            746 => array(
                'name' => 'P'
            ),
            747 => array(
                'name' => 'Pacobo'
            ),
            748 => array(
                'name' => 'Pakouabo'
            ),
            749 => array(
                'name' => 'Pambasso-Diédou'
            ),
            750 => array(
                'name' => 'Pangalakaha'
            ),
            751 => array(
                'name' => 'Paoufla'
            ),
            752 => array(
                'name' => 'Papara (Tengréla)'
            ),
            753 => array(
                'name' => 'Para (Tabou)'
            ),
            754 => array(
                'name' => 'Pauly'
            ),
            755 => array(
                'name' => 'Péguékaha'
            ),
            756 => array(
                'name' => 'Péhé'
            ),
            757 => array(
                'name' => 'Péhékanhouébli'
            ),
            758 => array(
                'name' => 'Pélézi'
            ),
            759 => array(
                'name' => 'Pétigoa 2'
            ),
            760 => array(
                'name' => 'Petit Guiglo'
            ),
            761 => array(
                'name' => 'Pinda-Boroko'
            ),
            762 => array(
                'name' => 'Pinhou'
            ),
            763 => array(
                'name' => 'Pitiengomon'
            ),
            764 => array(
                'name' => 'Plateau'
            ),
            765 => array(
                'name' => 'Pleuro'
            ),
            766 => array(
                'name' => 'Podiagouiné'
            ),
            767 => array(
                'name' => 'Podoué'
            ),
            768 => array(
                'name' => 'Pogo'
            ),
            769 => array(
                'name' => 'Pokréagui'
            ),
            770 => array(
                'name' => 'Ponondougou'
            ),
            771 => array(
                'name' => 'Port-Bouët'
            ),
            772 => array(
                'name' => 'Poumbly'
            ),
            773 => array(
                'name' => 'Pranouan'
            ),
            774 => array(
                'name' => 'Prikro'
            ),
            775 => array(
                'name' => 'R'
            ),
            776 => array(
                'name' => 'Raviart'
            ),
            777 => array(
                'name' => 'Roa'
            ),
            778 => array(
                'name' => 'Rubino'
            ),
            779 => array(
                'name' => 'S'
            ),
            780 => array(
                'name' => 'Saboudougou'
            ),
            781 => array(
                'name' => 'Sago'
            ),
            782 => array(
                'name' => 'Sahébo'
            ),
            783 => array(
                'name' => 'Sahuyé'
            ),
            784 => array(
                'name' => 'Saïoua'
            ),
            785 => array(
                'name' => 'Sakassou'
            ),
            786 => array(
                'name' => '((Sakahouo))'
            ),
            787 => array(
                'name' => 'Sakré'
            ),
            788 => array(
                'name' => 'Samango'
            ),
            789 => array(
                'name' => 'Samanza'
            ),
            790 => array(
                'name' => 'Samatiguila'
            ),
            791 => array(
                'name' => 'Saminikro'
            ),
            792 => array(
                'name' => 'San-Pédro'
            ),
            793 => array(
                'name' => 'Sandala'
            ),
            794 => array(
                'name' => 'Sandégué'
            ),
            795 => array(
                'name' => 'Sandougou-Soba'
            ),
            796 => array(
                'name' => 'Sangouiné'
            ),
            797 => array(
                'name' => 'Sankadiokro'
            ),
            798 => array(
                'name' => 'Santa (Biankouma)'
            ),
            799 => array(
                'name' => 'Santa (Touba)'
            ),
            800 => array(
                'name' => 'Sapli-Sépingo'
            ),
            801 => array(
                'name' => 'Sarhala'
            ),
            802 => array(
                'name' => 'Sassako Bégnini'
            ),
            803 => array(
                'name' => 'Sassandra'
            ),
            804 => array(
                'name' => 'Satama-Sokoro'
            ),
            805 => array(
                'name' => 'Satama-Sokoura'
            ),
            806 => array(
                'name' => 'Satikran'
            ),
            807 => array(
                'name' => 'Satroko'
            ),
            808 => array(
                'name' => 'Sébédoufla'
            ),
            809 => array(
                'name' => 'Séguéla'
            ),
            810 => array(
                'name' => 'Séguélon'
            ),
            811 => array(
                'name' => 'Séileu'
            ),
            812 => array(
                'name' => 'Séitifla'
            ),
            813 => array(
                'name' => 'Sémien'
            ),
            814 => array(
                'name' => 'Sépikaha'
            ),
            815 => array(
                'name' => 'Sérébissou'
            ),
            816 => array(
                'name' => 'Sérihi'
            ),
            817 => array(
                'name' => 'Seydougou'
            ),
            818 => array(
                'name' => 'Sianhala'
            ),
            819 => array(
                'name' => 'Siansoba'
            ),
            820 => array(
                'name' => 'Siempurgo'
            ),
            821 => array(
                'name' => 'Sifié'
            ),
            822 => array(
                'name' => 'Sikensi'
            ),
            823 => array(
                'name' => 'Sikolo'
            ),
            824 => array(
                'name' => 'Silakoro'
            ),
            825 => array(
                'name' => 'Sinématiali'
            ),
            826 => array(
                'name' => 'Sinfra'
            ),
            827 => array(
                'name' => 'Singo'
            ),
            828 => array(
                'name' => 'Siolokaha'
            ),
            829 => array(
                'name' => 'Sipilou'
            ),
            830 => array(
                'name' => 'Sirana'
            ),
            831 => array(
                'name' => 'Sirasso'
            ),
            832 => array(
                'name' => 'Siriho'
            ),
            833 => array(
                'name' => 'Sissédougou'
            ),
            834 => array(
                'name' => 'Soaékpé-Douédy'
            ),
            835 => array(
                'name' => 'Soba (Korhogo)'
            ),
            836 => array(
                'name' => 'Soba-Banandjé'
            ),
            837 => array(
                'name' => 'Sohouo'
            ),
            838 => array(
                'name' => 'Sokala-Sobara'
            ),
            839 => array(
                'name' => 'Sokoro'
            ),
            840 => array(
                'name' => 'Sokorodougou'
            ),
            841 => array(
                'name' => 'Sokourala-Mahou'
            ),
            842 => array(
                'name' => 'Sokrogbo'
            ),
            843 => array(
                'name' => 'Sokrogbo-Carrefour'
            ),
            844 => array(
                'name' => 'Sominassé'
            ),
            845 => array(
                'name' => 'Somokoro'
            ),
            846 => array(
                'name' => 'Songan'
            ),
            847 => array(
                'name' => 'Songon'
            ),
            848 => array(
                'name' => 'Songori'
            ),
            849 => array(
                'name' => 'Sononzo'
            ),
            850 => array(
                'name' => 'Sorobango'
            ),
            851 => array(
                'name' => 'Soubré'
            ),
            852 => array(
                'name' => 'Soukourougban'
            ),
            853 => array(
                'name' => 'Soungassou'
            ),
            854 => array(
                'name' => 'Subiakro'
            ),
            855 => array(
                'name' => 'T'
            ),
            856 => array(
                'name' => 'Taabo'
            ),
            857 => array(
                'name' => 'Taabo-Village'
            ),
            858 => array(
                'name' => 'Tabagne'
            ),
            859 => array(
                'name' => 'Tabayo 1'
            ),
            860 => array(
                'name' => 'Tabléguikou'
            ),
            861 => array(
                'name' => 'Taboth'
            ),
            862 => array(
                'name' => 'Tabou'
            ),
            863 => array(
                'name' => 'Tafiré'
            ),
            864 => array(
                'name' => 'Tagadi'
            ),
            865 => array(
                'name' => 'Tahakro'
            ),
            866 => array(
                'name' => 'Tahibly'
            ),
            867 => array(
                'name' => 'Taï'
            ),
            868 => array(
                'name' => 'Takikro'
            ),
            869 => array(
                'name' => 'Takoréagui'
            ),
            870 => array(
                'name' => 'Talahini Tomora'
            ),
            871 => array(
                'name' => 'Tambi'
            ),
            872 => array(
                'name' => 'Tanda'
            ),
            873 => array(
                'name' => 'Tangafla'
            ),
            874 => array(
                'name' => 'Tanguélan'
            ),
            875 => array(
                'name' => 'Tankessé'
            ),
            876 => array(
                'name' => 'Taoudi'
            ),
            877 => array(
                'name' => 'Tapéguia'
            ),
            878 => array(
                'name' => 'Tawara'
            ),
            879 => array(
                'name' => 'Téapleu'
            ),
            880 => array(
                'name' => 'Téguéla'
            ),
            881 => array(
                'name' => 'Téhini'
            ),
            882 => array(
                'name' => 'Téhiri'
            ),
            883 => array(
                'name' => 'Tendéné-Bambarasso'
            ),
            884 => array(
                'name' => 'Tengréla'
            ),
            885 => array(
                'name' => 'Tézié'
            ),
            886 => array(
                'name' => 'Tiagba'
            ),
            887 => array(
                'name' => 'Tiapoum'
            ),
            888 => array(
                'name' => 'Tiassalé'
            ),
            889 => array(
                'name' => 'Tibéita'
            ),
            890 => array(
                'name' => 'Tié N’diékro'
            ),
            891 => array(
                'name' => 'Tiébissou'
            ),
            892 => array(
                'name' => 'Tiédio'
            ),
            893 => array(
                'name' => 'Tiégba'
            ),
            894 => array(
                'name' => 'Tiékpé'
            ),
            895 => array(
                'name' => 'Tiémé'
            ),
            896 => array(
                'name' => 'Tiémélékro'
            ),
            897 => array(
                'name' => 'Tiénindiéri'
            ),
            898 => array(
                'name' => 'Tiéningboué'
            ),
            899 => array(
                'name' => 'Tienko (département de Minignan)'
            ),
            900 => array(
                'name' => 'Tienko (département de Touba)'
            ),
            901 => array(
                'name' => 'Tienkoikro'
            ),
            902 => array(
                'name' => 'Tiény-Séably'
            ),
            903 => array(
                'name' => 'Tiéolé-Oula'
            ),
            904 => array(
                'name' => 'Tiéviéssou'
            ),
            905 => array(
                'name' => 'Timbé'
            ),
            906 => array(
                'name' => 'Tinhou'
            ),
            907 => array(
                'name' => 'Tiobly'
            ),
            908 => array(
                'name' => 'Tioro'
            ),
            909 => array(
                'name' => 'Tofla'
            ),
            910 => array(
                'name' => 'Togoniéré'
            ),
            911 => array(
                'name' => 'Toliesso'
            ),
            912 => array(
                'name' => 'Tomono'
            ),
            913 => array(
                'name' => 'Tonla'
            ),
            914 => array(
                'name' => 'Torossanguéhi'
            ),
            915 => array(
                'name' => 'Tortiya'
            ),
            916 => array(
                'name' => 'Totrodrou'
            ),
            917 => array(
                'name' => 'Touba'
            ),
            918 => array(
                'name' => 'Toubalo'
            ),
            919 => array(
                'name' => 'Tougbo'
            ),
            920 => array(
                'name' => 'Touih'
            ),
            921 => array(
                'name' => 'Toukouzou'
            ),
            922 => array(
                'name' => 'Toulepleu'
            ),
            923 => array(
                'name' => 'Toumodi'
            ),
            924 => array(
                'name' => 'Toumodi-Sakassou'
            ),
            925 => array(
                'name' => 'Toumoukoro'
            ),
            926 => array(
                'name' => 'Toupah'
            ),
            927 => array(
                'name' => 'Toutoubré'
            ),
            928 => array(
                'name' => 'Trafesso'
            ),
            929 => array(
                'name' => 'Transua'
            ),
            930 => array(
                'name' => 'Treichville'
            ),
            931 => array(
                'name' => 'V'
            ),
            932 => array(
                'name' => 'Vaafla'
            ),
            933 => array(
                'name' => 'Vao'
            ),
            934 => array(
                'name' => 'Varalé'
            ),
            935 => array(
                'name' => 'Vavoua'
            ),
            936 => array(
                'name' => 'Vouéboufla'
            ),
            937 => array(
                'name' => 'W'
            ),
            938 => array(
                'name' => 'Walèbo'
            ),
            939 => array(
                'name' => 'Waté'
            ),
            940 => array(
                'name' => 'Wonséaly'
            ),
            941 => array(
                'name' => 'Worofla'
            ),
            942 => array(
                'name' => 'Y'
            ),
            943 => array(
                'name' => 'Yaakro'
            ),
            944 => array(
                'name' => 'Yabayo'
            ),
            945 => array(
                'name' => 'Yacolidabouo'
            ),
            946 => array(
                'name' => 'Yakassé-Attobrou'
            ),
            947 => array(
                'name' => 'Yakassé-Feyassé'
            ),
            948 => array(
                'name' => 'Yakassé-Mé'
            ),
            949 => array(
                'name' => 'Yakpabo-Sakassou'
            ),
            950 => array(
                'name' => 'Yala (Vavoua)'
            ),
            951 => array(
                'name' => 'Yamoussoukro'
            ),
            952 => array(
                'name' => 'Yaossédougou'
            ),
            953 => array(
                'name' => 'Yaou'
            ),
            954 => array(
                'name' => 'Yapleu'
            ),
            955 => array(
                'name' => 'Yelleu'
            ),
            956 => array(
                'name' => 'Yérétiélé'
            ),
            957 => array(
                'name' => 'Yézimala'
            ),
            958 => array(
                'name' => 'Yobouakro'
            ),
            959 => array(
                'name' => 'Yocoboué'
            ),
            960 => array(
                'name' => 'Yokoréa'
            ),
            961 => array(
                'name' => 'Yoourédoula'
            ),
            962 => array(
                'name' => 'Yopohué'
            ),
            963 => array(
                'name' => 'Yopougon'
            ),
            964 => array(
                'name' => 'Yorobodi'
            ),
            965 => array(
                'name' => 'Yorodougou'
            ),
            966 => array(
                'name' => 'Yrozon'
            ),
            967 => array(
                'name' => 'Z'
            ),
            968 => array(
                'name' => 'Zagné'
            ),
            969 => array(
                'name' => 'Zagoréta-Gadouan'
            ),
            970 => array(
                'name' => 'Zagoué (Man)'
            ),
            971 => array(
                'name' => 'Zaguiéta'
            ),
            972 => array(
                'name' => 'Zaguinasso'
            ),
            973 => array(
                'name' => 'Zahia'
            ),
            974 => array(
                'name' => 'Zaïbo'
            ),
            975 => array(
                'name' => 'Zakoéoua'
            ),
            976 => array(
                'name' => 'Zaliohouan'
            ),
            977 => array(
                'name' => 'Zambakro'
            ),
            978 => array(
                'name' => 'Zanzansou'
            ),
            979 => array(
                'name' => 'Zanzra'
            ),
            980 => array(
                'name' => 'Zaranou'
            ),
            981 => array(
                'name' => 'Zatta'
            ),
            982 => array(
                'name' => 'Zéaglo'
            ),
            983 => array(
                'name' => 'Zébouo Nord'
            ),
            984 => array(
                'name' => 'Zébra'
            ),
            985 => array(
                'name' => 'Zédé-Dianhoun'
            ),
            986 => array(
                'name' => 'Zégo'
            ),
            987 => array(
                'name' => 'Zéménafla-V'
            ),
            988 => array(
                'name' => 'Zéo'
            ),
            989 => array(
                'name' => 'Zérégbo'
            ),
            990 => array(
                'name' => 'Zialégréhoa (Grand-Zia)'
            ),
            991 => array(
                'name' => 'Ziki-Diès'
            ),
            992 => array(
                'name' => 'Zikisso'
            ),
            993 => array(
                'name' => 'Ziogouiné'
            ),
            994 => array(
                'name' => 'Zirifla'
            ),
            995 => array(
                'name' => 'Zokoguhé'
            ),
            996 => array(
                'name' => 'Zonneu'
            ),
            997 => array(
                'name' => 'Zorofla'
            ),
            998 => array(
                'name' => 'Zou'
            ),
            999 => array(
                'name' => 'Zouan-Hounien'
            ),
            1000 => array(
                'name' => 'Zouatta'
            ),
            1001 => array(
                'name' => 'Zougounéfla'
            ),
            1002 => array(
                'name' => 'Zoukougbeu'
            ),
            1003 => array(
                'name' => 'Zoukpangbeu'
            ),
            1004 => array(
                'name' => 'Zoupleu'
            ),
            1005 => array(
                'name' => 'Zraluo'
            ),
            1006 => array(
                'name' => 'Zro'
            ),
            1007 => array(
                'name' => 'Zuénoula'
            ),
        );
        foreach ($commune as $k=>$val){
          Cities::create($val);
        }
    }
}
