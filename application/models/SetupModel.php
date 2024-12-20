<?php

class SetupModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
        $this->loadDB = $this->load->database('exploit', TRUE);
    }

    public function HackIgniter()
    {
        $createDatabase = $this->dbforge->create_database("hackigniter");
        if ($createDatabase) {
            $this->db->close();
            return 1;
        }
    }

    public function hi_0()
    {
        $createTable = "CREATE TABLE `hi_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `loginStatus` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4";

        $insertData = "INSERT INTO `hi_0` (`id`, `username`, `password`, `loginStatus`) VALUES (1, 'susamam3513', 'o2cnd3q50psp', '0')";

        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_1()
    {
        $createTable = "CREATE TABLE `hi_1` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `loginStatus` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_1` (`id`, `username`, `password`, `loginStatus`) VALUES (1, 'susamam5241', 'kkmlwu15ub7p', '0'), (2, 'flag', '8740e334-01c0-4db9-b63b-19399b061c1f', '0');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_csrf_0()
    {
        $createTable = "CREATE TABLE `hi_csrf_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(250) NOT NULL, `surname` varchar(250) NOT NULL, `identityNumber` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `ibanNumber` varchar(250) NOT NULL, `totalAmount` float NOT NULL, PRIMARY KEY (`id`), UNIQUE KEY `ibanNumber` (`ibanNumber`), UNIQUE KEY `identityNumber` (`identityNumber`) ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_csrf_0` (`id`, `name`, `surname`, `identityNumber`, `password`, `ibanNumber`, `totalAmount`) VALUES (5, 'Ferhat', 'Çil', '18362964212', '1881', '0001', 1), (6, 'Richie', 'Rich', '56044987104', '1234', '0002', 9999)";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_csrf_1()
    {
        $createTable = "CREATE TABLE `hi_csrf_1` ( `id` int(11) NOT NULL AUTO_INCREMENT, `id1` varchar(250) NOT NULL, `id2` varchar(250) NOT NULL, `amount` int(11) NOT NULL, `date` datetime NOT NULL DEFAULT current_timestamp(), PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4";
        if ($this->loadDB->query($createTable)) {
            return 1;
        }
    }

    public function hi_flags()
    {
        $createTable = "CREATE TABLE `hi_flags` ( `id` int(11) NOT NULL AUTO_INCREMENT, `vulnerabilityCode` varchar(250) NOT NULL, `name` varchar(250) NOT NULL, `status` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_flags` (`id`, `vulnerabilityCode`, `name`, `status`) VALUES (1, 'errorBasedSqlInjection', '39d3ffa1-45a0-4c61-981b-348fe3cbd259', '0'), (2, 'timeBasedSqlInjection', '8740e334-01c0-4db9-b63b-19399b061c1f', '0'), (3, 'idor', 'null', '0'), (4, 'csrf', 'null', '0'), (5, 'xssToRce', '8dd5e8d3-ea7d-4199-b895-4690415bfec0', '0'), (6, 'osCommand', '44211f5c-3863-4348-a8bf-896fccd010f8', '0'), (7, 'missingFunction', 'null', '0');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_idor_0()
    {
        $createTable = "CREATE TABLE `hi_idor_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(250) NOT NULL, `surname` varchar(250) NOT NULL, `identityNumber` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `ibanNumber` varchar(250) NOT NULL, `totalAmount` float NOT NULL, PRIMARY KEY (`id`), UNIQUE KEY `ibanNumber` (`ibanNumber`), UNIQUE KEY `identityNumber` (`identityNumber`) ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_idor_0` (`id`, `name`, `surname`, `identityNumber`, `password`, `ibanNumber`, `totalAmount`) VALUES (1, 'Ferhat', 'Cil', '32992363894', 'pass', '0001', 1), (2, 'Mustafa', 'Dükel', '10514736838', 'rV4hBbbj7YJQZV8Y', '0002', 60), (3, 'Murat', 'Sahin', '91864751450', 'Eu4S6EGdKC5D29Cf', '0003', 100), (4, 'Nurcan', 'İlhan', '57946915882', 'BSf8vAC3yrsmsmYc', '0004', 1000);";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_idor_1()
    {
        $createTable = "CREATE TABLE `hi_idor_1` ( `id` int(11) NOT NULL AUTO_INCREMENT, `id1` varchar(250) NOT NULL, `id2` varchar(250) NOT NULL, `amount` int(11) NOT NULL, `date` datetime NOT NULL DEFAULT current_timestamp(), PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_idor_1` (`id`, `id1`, `id2`, `amount`, `date`) VALUES (26, '0001', '0002', 10, '2021-07-12 14:10:04');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_missingfunction_0()
    {
        $createTable = "CREATE TABLE `hi_missingfunction_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_missingfunction_0` (`id`, `username`, `password`) VALUES (1, 'cyberdetails', '12345'), (4, 'nazimhikmet', 'piraye')";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_users()
    {
        $createTable = "CREATE TABLE `hi_users` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(500) NOT NULL, `status` enum('0','1') NOT NULL DEFAULT '1', `createdAt` datetime NOT NULL DEFAULT current_timestamp(), PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_users` (`id`, `username`, `password`, `status`, `createdAt`) VALUES (1, 'admin', 'susamam', '1', '2021-05-16 01:46:58');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_xss_0()
    {
        $createTable = "CREATE TABLE `hi_xss_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `role` enum('0','1') NOT NULL DEFAULT '0', `loginStatus` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_xss_0` (`id`, `username`, `password`, `role`, `loginStatus`) VALUES (2, 'burakbozaci', '1234', '0', '0'), (4, 'ferhatcil', '1234', '1', '0');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_xss_1()
    {
        $createTable = "CREATE TABLE `hi_xss_1` ( `id` int(11) NOT NULL AUTO_INCREMENT, `userID` int(11) NOT NULL, `title` varchar(250) NOT NULL, `content` varchar(500) NOT NULL, `createdDate` datetime NOT NULL DEFAULT current_timestamp(), PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_xss_1` (`id`, `userID`, `title`, `content`, `createdDate`) VALUES (5, 2, 'Klavyeme çokomel bulaştı.', 'Yine aynı şey oldu klavyeye kahveyi dökdüm bir kaç dakika önce. Şimdilik çalışıyor bakalım ne olacak. İnsanlık bu klavye kahve sorunsalına nasıl çare bulacak herşey mars a gitmek değilki . Birazdan içerdeki sıvı buharlaşacak yapışkan şeker kahve çokomel karışımı tuşları tutukluk yapıp kitleyecek biliyorum. Bir süre yazmazsam endişeye kapılmayın lütfen. ', '2021-05-22 19:51:43');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_xss_2()
    {
        $createTable = "CREATE TABLE `hi_xss_2` ( `id` int(11) NOT NULL AUTO_INCREMENT, `ticketId` int(11) NOT NULL, `userID` int(11) NOT NULL, `comment` varchar(250) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_xss_2` (`id`, `ticketId`, `userID`, `comment`) VALUES (23, 5, 4, 'Islak mendille silmeyi dene.'), (33, 5, 2, 'Çok akıllısın ya.');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_sqli_0()
    {
        $createTable = "CREATE TABLE `hi_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `loginStatus` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_sqli_0` (`id`, `text`, `author`) VALUES (1, 'Sağı solu belli olmayan Mangala gitti maganda! Orman yanar Tabiatın gözleri kan ağlar', 'Fuat'), (2, 'Abi yapma! Atma şu izmaritini denize Geri alamazsın Gün gelir o pisliğini attığın denize hasret kalırsın, bakamazsın!', 'Ados'), (3, 'Fakirin vergisiyle yatına, katına katana salak Haşere geri yolsuz vekil seni, senin eserin! Şimdi kapını kollaması gereken adalet gelir acımaz\r\n\r\nVurur kırar kapını\r\n\r\nÇünkü çocuk öldü vuran memurdu diye \"Haklıdır\" dedin\r\n\r\nSesini çıkarmadın, yani suçlusun!', 'Şanışer'), (4, 'Medya, basın, hukuk, asker hepsi sizin için çalışırken Aslen güneş bile üzerine doğuyo bu çocukların İşe gidip geliyolar canlarına kasten Silahınızı kin! Bu çektiğimiz bizim günahımız değil Planınız iyi! Ben bilmem bunun inananı kim? Ama bilirim, gel Silahımız dil!', 'Hayki'), (5, 'Müzik yapmak dışında bi\' bok yemedim! Polis bi\' şeyleri problem edip Yine duruşmadayım sen konsere git Ben aynı takım elbisemle 10 senedir Biri dönüp desin bana \"Çaban boş yere değil\" O gün kalbimi, ruhumu komple veriyim ama Yargı gelip arıyor bedeli Yaşıyorum cehennemi, yanıyor bedenim', 'Server Uraz'), (6, 'Merhaba Türkiye Bende var hüviyet Yaşamaya çalışıyoruz hasbelkader gitmeden katakulliye Ekrana süs diye çıkan şarlatan, hep fanatik biri! Fesatlık, kötü niyet salgın gibi Eder daha manipüle! Bu bir temsil ya da piyes! Bu uçaksa bu türbülans! Komşumuzdu Suriye Şimdi bu gemideki vatandaş mı? (Yurttaş mı?) Huzurda değil ölü bile topraktakilerin ahı var Sadece gazeteydi \"Hürriyet\" Sen olabildiğince özgür ol!', 'Beta'), (7, 'Beton ormanda hayvan olman normal Tutsak göz altların yine morlar Yönetenler çağ dışı dinozorlar Bu ormanda herkese göre rol var Sustukça sıra sana gelecek Aydın beyinleri bekliyor karanlık gelecek', 'Asil Slang & Zen-G'), (8, 'Sokak başı üniversite ama köy okulları çok terste Başa gelenin ideolojisi neyse o anlatılır her derste Zengin, fakir ayrı Torpile ya da parasına göre kayırır Eğitim endüstridir İnşaattan rant sağlamaka aynı! Kiminin kitap alıcak bi\' parası yok Öğretmen atanıcak ama \"arası\" yok! Milletvekili bi\' tanıdık mı, wow Beni anlaman da bu mantıkla zor Bari bi\' köy okulunun yardımına koş Her tarafı kaos Sen de biraz boğuş Bu gece uyudu zorla çocuk Okula gidecek YOL YAP!', 'Sokrat St'), (9, 'Anlamak mı yasak olabilir Ama sadece bi\' yanıtı yok bi\' sürü cevap var koş git yanıt ara Peşine düş mutlaka kanıt ara Ruhunu demle hep yakıt ara lan Kalbini tut ve de buna tanık ara Hadi nefesini gör ve git sanat ara Sorgula sorgula atomları Işık hızını düşün ve de git kanat ara sonra Uç uçabildiğin kadar', 'Ozbi'), (10, 'Ben bilmem hiç kendimi korumak zorunda kalmadım Bilmem ben bi\' çocuğu düşünmek zorunda olmadım Hiç evlendirilmedim Evde dayak görmedim Kendi evimde kendi odama zorla hapsedilmedim Sözlerinizi kusmadım Yurdumdan edilmedim Nefretinizle yanmadım Yakılarak can vermedim Hiç kardeşim olmadı Hiç abimden korkmadım Okuldan alınmadım Ben hiç öldürülmedim', 'Deniz Tekin'), (11, 'Ülkede erkek neden en üstte minibüste, evde ya da metrobüste Taciz şiddeti hiç bitmiyo\' Kınamakla falan iş bitmiyo\' Uh, Ah, adam olamadınız bu kalıbının adamı mı para babalarınız? Beşiktaş\'ta beş tokat, leş hareketler Cebi dolu ciğerin beş para etmez Yaşadığın kafa ne? İnsan mısın? Biz utandık ulan! İnsan mısın? İnsan mısın? Bu hale nasıl gelir insan? Nasıl?', 'Yeis Sensura & Sehabe'), (12, 'Düşerim derinlere Dünya, dönsün başım gibi Aklımı kaybederek rüya Nefesim, iç sesim Düşerim derinlere Dünya, dönsün başım gibi Aklımı kaybederek rüya Nefesim, iç sesim Düşerim derinlere', 'Aspova'), (13, 'Bak Almanya buz gibi morg Bana sor sana diyim Gençlerin çoğunda amfetamin, tilidin ya da weed, kokain ya da speed, crack Sana göre güzel ama bana göre değil Bana göre değil, kafana göre yürü bas mayına geber Ederi kaç? Kaç? Kaç? Kaç paraya bedel? Yeter artık dönme teker gibi Dost ol yeter bana Geliyorsan dosdoğru gel', 'Defkhan'), (14, 'Bi\' kap su ver çok mu zor Vicdanlı ol be lanet Anlamak istemiyosun ama bütün bu canlar sana bana emanet Lan bi\' düşün: \"Soğukta kışta dışarda tek başına yaşıyosun Dilini anlayan kimse yok hep tehlike, hep felaket, hep afet\" Ademe bir türlü yaranamazlar Vicdana bakar paraya bakmaz Toplayıp ormana atmak çözüm değil Bunlar kurt değil, ormanda kendi başlarına yaşayamazlar Onları sen savun, onlar kendi haklarını arayamazlar Barınaklar dolu Memleket acı Seması kara Sokak hayvanlarına tecavüz etmenin, işkence etmenin cezası para \"Büyük ahlaksızlıklar için büyük aptallar lazımdır\" Bütün insanlar suçlu değildir ama Bütün hayvanlar masumdur', 'Şanışer'), (15, 'Gel, gül olur hapsolur bu suçlu cümleler! Yenilir hiç olurum fark etmezler! Susmam, susamam! Korkma yanıma gel! Gel, gül olur hapsolur bu suçlu cümleler! Yenilir hiç olurum fark etmezler! Susmam SUSAMAM!', 'Şanışer'), (16, 'Hiçbir şeyi yaşamak kadar sevme Sana bi dünya yaratamam da elini tutarım elbette Varsın herkes terk etsin seni Sen dünyayı terk etme Seni yargılamıyorum Acını tam olarak anlamam mümkün değil biliyorum Kaldıramadığım yükleri bırakıp kendi yolumdan gidiyorum ben Sen de aynaya bak lütfen \"Seni seviyorum\" de', 'Sokrat St'), (17, 'Ey! Faşizm ne mi? En amiyane deyimiyle faka basacağız Beynelmilel el birliğiyle Tek bildiğiniz siz Ve de pek çok kazanın asıl sebebi aşırı hırs Bu hırs bi\' ebedi his. Biz façası pis de eli temiz bir nesiliz Bu işin selesi siz de Tekeri gidonu biz Ey, e bi tabi biz de biz gibi bir nes\'lin peşindeyiz.', 'Aga B'), (18, 'Yüzüne bakamam yüzüm düşer o yerlere Ayakları çıplakken gözleri dalar düşlere Başı önünde ama beden çıkıyor sefere Yok mecal dizinde Bak, her bi\' günü sürgüne Kaçamıyo\' kovalıyo\' zalimler Ele güne, ele bakıyor o gözler Kodamanın parasını ateşe ver Ve de koyduğumun egosunu bi\' yere ser Sokağa bakanın adını değil Yoksulumun, yetimimin adını ver Zabıtaları seyyara değil Gökdelenlere gönder', 'Mirac'), (19, 'Fırtınadan kopup giden dalların bi\' tanesiyim Fazla yol almış ve yıpranmış İçimde neler dönüp durur anlatsam tarifi yok Bazen evsiz bi\' çocuğun hikayesiyim', 'Mert Şenel'), (20, 'Can pazarı, otobanlar can pazarı 365 günün riskli Bitmiyo\' gamsız magandası Öde kan parası Bi\' kaza bayrama matem düşürür Yürek dağlar acılar cabası Bir sela çınlar kulaklarında Hiç dinmez yarası Trafik terörüne eşlik eder alkol, şiddet, hız tutkusu 25 yaşında yüz binlik arabaya binen gençlerin yok korkusu Önce emniyet sonra hoşgörü Sabır, selamet gerekiyor insan Ufacık bir hata her şeyi karartır inan yok dönüşü', 'Kamufle');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

}
