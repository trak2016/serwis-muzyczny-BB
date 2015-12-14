-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2015, 11:30
-- Wersja serwera: 10.0.17-MariaDB
-- Wersja PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwismuzyczny_bd`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_polish_ci NOT NULL,
  `describe_cd` text COLLATE utf8_polish_ci NOT NULL,
  `rok` date DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `cover` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `album`
--

INSERT INTO `album` (`id_album`, `title`, `describe_cd`, `rok`, `rate`, `cover`, `status`, `id_genre`) VALUES
(1, 'Feline', 'Jeszcze na długo przed wydaniem płyty Ella Eyre stała się jednym z największych objawień 2014 r. Wyjątkowy głos, nietuzinkowa uroda z burzą charakterystycznych loków i talent do pisania chwytliwych piosenek sprawiły, że ta zaledwie 21-letnia Brytyjka to jedna z najbardziej ekscytujących wokalistek ostatnich lat. Na swoim koncie ma już statuetkę Brit Award za hit „Waiting All Night” z grupą Rudimental, a ostatnio została twarzą nowych perfum Emporio Armani. ', '2015-12-06', 0, 1, 1, 2),
(2, 'Fabryka klamek', 'Mieszkam w pobliżu fabryki klamek, a żadna z nich jeszcze nie zapadła...” Tak rozpoczyna się „Fabryka klamek” – piosenka, od której bierze nazwę nowy, autorski album Grzegorza Turnaua. Motyw podróży i przemijania, obecny jest zarówno w tym utworze, jak i na całej płycie. 14 nowych piosenek, różni się od siebie, zarówno w  warstwie muzycznej, jak i literackiej. Całość powiązana jest niepowtarzalnym stylem Artysty i stanowi wspaniałą podróż. Dokąd? Niech ocenią to sami słuchacze.', '2015-12-08', 0, 2, 1, 6),
(3, 'ALE', '„Ale” Doroty Miśkiewicz to garść delikatnej elektroniki połączonej z podróżą w przeszłość, do krainy retro, kiedy słowo diwa nie znaczyło jeszcze „kapryśna gwiazda”, ale „osobowość” i kiedy można było śpiewać piosenkę o najważniejszych sprawach w niebanalny, lekki sposób. Na nową damę polskiej piosenki niejako namaszcza Dorotę Ewa Bem, w duecie z którą wykonuje tytułowy utwór. Duet jaki tworzy z Wojciechem Waglewskim, pokazuje z kolei, że piosenkowe pojedynki damsko-męskie mogą być dziś równie ekscytujące, jak w czasach, kiedy Jane Birkin śpiewała z Serge"em Gainsburgiem, a Frank z Nancy Sinatrą.', '2015-10-01', 0, 3, 1, 3),
(4, 'Blues w sile wieku', ' Sławek Wierzcholski jest bez wątpienia jednym z najbardziej uzdolnionych harmonijkarzy i propagatorów tradycyjnego bluesa w naszym kraju. Podczas długoletniej działalności doczekał się, wraz z zespołem, uznania nie tylko rodzimych blues fanów, ale i publiczności amerykańskiej, która bluesa ma przcież we krwi. „Naturalne brzmienie akustycznych instrumentów, oczyszcza tę muzykę z wszelkich przypadkowych mód i artystycznych tendencji" (Sławomir Gołaszewski-Magazyn Muzyczny 5/1998). Płyta ta to udana próba przekrojowej prezentacji twórczości, dzisiaj już, klasyków gatunku z Nocnej Zmiany Bluesa.', '2015-12-04', 0, 4, 1, 5),
(5, 'Born in the U.S.A.', 'Nowa edycja płyty Bruce’a Springsteena „Born in the U.S.A.”  – siódmego albumu artysty, który ukazał się w 1984 roku. Album odniósł ogromny sukces komercyjny – był najlepiej sprzedającym się albumem roku w Stanach Zjednoczonych. „Born in the U.S.A.” okazała się również najpopularniejszą płytą w karierze Bossa, rozchodząc się w ponad 30 milionach kopii.', '2015-12-10', 0, 5, 1, 1),
(6, 'The very best of', 'Słuchając piosenek Andrzeja Zauchy trudno uwierzyć, że był muzycznym samoukiem. Nie tylko śpiewać nauczył się sam, grał także na perkusji i saksofonie. Potwierdzeniem talentu i umiejętności, była z pewnością współpraca z takimi muzykami jak zespoły Dżamble i Anawa oraz jazzmani Jan Ptaszyn Wróblewski, Michał Urbaniak czy Jarosław Śmietana. Od roku 1980, kontynuował karierę solową jako wokalista kojarzony bardziej ze sceną pop.', '2015-12-04', 5, 6, 1, 3),
(7, 'Come away with me', 'Debiutancka płyta długogrająca amerykańskiej piosenkarki i kompozytorki Nory Jones. Album, sprzedany w ponad 20 milionach egzemplarzy, stał się ogólnoświatowym przebojem oraz zdobył osiem nagród Grammy. W Stanach Zjednoczonych sprzedano ponad 10 milionów egzemplarzy, co pozwoliło płycie na zdobycie statusu diamentowej.', '2015-12-04', 0, 7, 1, 3),
(8, 'Greatest hits', 'Wprawdzie kariera Lenny Kravitza trwa już ponad 10 lat (artysta wydał w tym czasie pięć płyt), ale jakoś nie wyobrażałem sobie, że i on zdecyduje się kiedyś na kompilację największych przebojów. Na szczęście, popularny gitarzysta i wokalista miał w czym wybierać, a właściwie każdą z zamieszczonych na krążku "Greatest Hits" jego piosenek można uznać za prawdziwy hit.', '2015-12-04', 0, 8, 1, 1),
(9, 'Higher than here', 'Obdarzony niezwykle oryginalnym głosem James Morrison wdarł się na scenę muzyczną w 2006r., ale nawet on nie mógł przewidzieć wtedy, że odniesie aż tak spektakularny sukces. Płyta „Higher Than Here” to zdecydowanie powrót do korzeni dla Jamesa Morrisona. Jednak akustyczne popowe i soulowe motywy tym razem zostały wzbogacone elementami gospel („Stay Like This” and „Too Late For Lullabies”). Co ciekawe na płycie pojawia się też jeden prawdziwie taneczny hit w postaci utworu „I Need You Tonight”.', '2015-12-07', 5, 9, 1, 4),
(10, 'Światopogląd', 'Odświeżona płyta „Światopodgląd” wraca odświeżona wydawniczo i z dwoma dodatkowymi nagraniami. Wśród nich „Oda do garnuszka” znakomicie pasuje do klimatu świątecznego ale nie jest to kolęda więc jej świąteczność trwa cały rok. Druga piosenka „Zimowa baśń” pochodzi z tej samej sesji nagraniowej, więc w naturalny sposób w końcu dołączyła do reszty.„Światopodgląd” to druga płyta Roberta Kasprzyckiego. Ukazała się 9 lat po tej pierwszej, najsłynniejszej, „Niebo do wynajęcia”. ', '2015-12-07', 5, 10, 1, 6),
(11, 'Kompresja ciszy', 'Nowy, dwupłytowy album Starego Dobrego Małżeństwa „Kompresja ciszy” zawiera osiemnaście klimatycznych ballad autorstwa Krzysztofa Myszkowskiego.\r\n\r\nSłowa założyciela i lidera SDM, jego charyzmatyczny głos oraz jedyne w swoim rodzaju brzmienie gitary wysuwają się na pierwszy plan, przenosząc słuchacza w świat, w którym główną rolę odgrywa wrażliwość oraz wolność.\r\n\r\nW nagraniach Krzysztofowi Myszkowskiemu towarzyszą jego wspaniali muzycy: Bolesław Pietraszkiewicz oraz Roman Ziobro. „Kompresja ciszy” to ponad siedemdziesiąt minut obcowania z niespotykanym kunsztem słowa oraz muzyki!', '2015-12-07', 5, 11, 1, 6),
(12, 'Nothing but the best', 'Sześćdziesięcioletnia działalność artystyczna Franka Sinatry przyniosła mu trzy Oscary, dwa Złote Globy, 10 nagród Grammy, nagrodę Emmy, przyznany przez prezydenta Medal Honoru, Złoty Medal Kongresu (najwyższe cywilne odznaczenie przyznawane przez Kongres w USA) oraz jedno z najbardziej prestiżowych odznaczeń, przyznane mu przez Amerykańską Akademię Sztuki i Wiedzy Filmowej w 1971 roku za wybitną działalność charytatywną - nagrodę Jean Hersholt Humanitarian Award.', '2015-12-04', 0, 12, 1, 2),
(13, 'Łódki marzeń', 'Album jest ukoronowaniem wieloletniej pracy zespołu, swoistą muzyczną wisienką na scenicznym torcie. Zawiera w sobie 11 utworów, skomponowanych do słów Wiesławy Kwinto-Koczan, Jarosława Kochanowskiego, Kazimierza Węgrzyna, a także Krzysztofa Kamila Baczyńskiego i Jerzego Harasymowicza. Łódki Marzeń" to przede wszystkim płyta dojrzała, a takowe rządzą się własnymi prawami. ', '2015-12-04', 0, 13, 1, 11),
(14, 'W górach jest wszystko co kocham VIII', 'To już 8 spotkanie z wykonawcami z Górskiej Krainy Łagodności zatytułowane Góry i Ludzie.  Siedmiu wykonawców i  jednocześnie siedem różnych muzycznych opowieści o górach, życiu, miłości i innych ważnych sprawach.  Siedem różnych światów i subiektywnych odczuć otaczającej nas rzeczywistości, które mają jeden wspólny mianownik â Góry.', '2015-12-04', 0, 14, 1, 11),
(15, 'Sobota', 'Po trzech albumach nagrodzonych złotymi płytami przyszedł czas na czwarty w karierze Soboty. Za produkcję muzyczną oczywiście odpowiada Matheo. Płyta jest bardzo zróżnicowana. Słuchacze znajdą tam inspiracje bluesem tak jak w utworze „Bandycki Raj”, sporo elektroniki, jak również rocka. Muzyka bardziej nawiązuje do pierwszej płyty „Sobotaż”. Znajdziemy tam też dużo instrumentów granych na żywo, fuzji z artystami spoza środowiska hip hopowego. ', '2015-12-04', 0, 15, 1, 13),
(16, 'Song of innocence', '„Songs of Innocence” to najbardziej osobisty album w karierze zespołu. Opowiada o historii powstania grupy oraz porusza takie tematy jak dom, rodzina i związki. Można na nim usłyszeć wpływy rocka i punk rocka lat 70, elektroniki wczesnych lat 80. oraz muzyki ambientowej. Longplay nagrywany był w Dublinie, Londynie, Nowym Jorku i Los Angeles. Za produkcję odpowiedzialny jest Danger Mouse wraz z Paulem Epworthem, Ryanem Tedderem, Declanem Gaffneyem i Floodem.', '2015-12-10', 5, 16, 1, 1),
(17, 'The Eminem show', 'Czwarty album studyjny amerykańskiego rapera Eminema, wydany w roku 2002. Utwory "Business", Say What You Say" i "My Dad''s Gone Crazy" wyprodukował Dr. Dre. Pozostałe wyprodukował sam Eminem.W 2003 album został sklasyfikowany na 317. miejscu listy 500 albumów wszech czasów magazynu Rolling Stone.', '2015-12-04', 0, 17, 1, 13),
(18, 'To mój blues', 'Jest to reedycja solowego albumu Tadeusza Nalepy, który powstawał w latach 1982-1988.\r\nWśród muzyków na płycie usłyszymy m.in. znakomitych: Tomasza Szukalskiego, Stanisława Sojkę, jak również syna Artysty Piotra Nalepę. Wśród doskonałych, jak zawsze, tekstów Bogdana Loebla na płycie znajdują się również świetne teksty samego Tadeusza Nalepy. Płyta jest swego rodzaju manifestem określającym "blues Nalepy". Sam Artysta uważał ten album za jeden z najlepszych w swojej karierze. ', '2015-12-04', 0, 18, 1, 5),
(19, 'Wallflower', 'Nagrywając Wallflower, nowy album dla wytwórni Verve Records Krall świadomie postanowiła powierzyć produkcję muzyczną w ręce nagrodzonego 16-krotnie statuetką Grammy - Davida Fostera. Na albumie znalazły się piosenki ukazujące niezwykły talent wokalny Krall, pochodzące z lat 60tych i współczesne. Na trackliście znajdziemy więc popularne, klasyczne przeboje takie jak “California Dreamin’” z repertuaru ''The Mamas and the Papas’.', '2015-12-04', 0, 19, 1, 3),
(20, 'Zakazane piosenki', 'Po sukcesie solowej płyty Kukiza, zatytułowanej „Siła i honor”, która oparła się wszelkim schematom gatunkowym, czy stylistycznym, a jednocześnie w błyskawicznym tempie zyskała status złotej, przyszedł czas na nieco lżejszy projekt.\r\nKukiz na „Zakazanych piosenkach” nie bawi się jednak w metafory, nie owija w bawełnę, tylko wali prostu z mostu. Tęgi łomot dostaje policja, obrywają funkcjonariusze służb wszelakich, media, ale przede wszystkim politycy.', '2015-12-04', 0, 20, 1, 1),
(21, 'Indios Bravos', '2009 - Piotr Banach o czwartej płycie Indios Bravos: "Jest tu i pulsacja reggae i rockowa ekspresja, jest trochę bluesowej melancholii i jazzowej improwizacji. Są poetyckie teksty i jest czasem kojący, a czasem zadziorny śpiew, są też gitarowe riffy i psychodeliczne partie klawiszy.', '2015-12-04', 0, 21, 1, 10),
(22, 'In the lonely hour', '6 listopada ukazuje się nowa edycja debiutanckiego albumu Sama Smitha „In The Lonely Hour: The Drowning Shadows Edition” - wydawnictwo zostało poszerzone o drugie CD z nowymi, ekskluzywnymi utworami. Album zawierałnową piosenkę „Drowning Shadows”, współtworzoną przez Smitha i Frasera T. Smitha. Produkcją zajęli się Jimmy Napes i Steve Fitzmaurice. „Drowning Shadows” w eleganckim stylu otwiera drugi dysk poszerzonej wersji albumu.', '2015-12-04', 0, 22, 1, 2),
(23, 'Both Sides', 'Phil Collins zapowiedział, że do czynnej działalności muzycznej już nie wróci, ale niedawno podpisał kontrakt z wytwórnią Warner na przygotowanie reedycji ośmiu płyt solowych. Jedną z nich jest album „Both Sides”. Solowa kariera artysty, który sprzedał na całym świecie ponad 100 mln płyt (solo i z grupą Genesis), zaczęła się na początku lat 80. W lutym 1981 roku ukazał się debiutancki materiał Phila Collinsa, zatytułowany "Face Value". ', '2015-09-11', 0, 23, 1, 2),
(24, 'Stay', 'Na płycie Stay znalazło się jedenaście utworów, w większości z tekstami Micka Hucknalla i muzyką spółki Hucknall/Wright oraz Hucknall/Kirkham. Rodzynkiem na krążku jest cover piosenki Debris z repertuaru grupy Faces z muzyką i tekstem Ronniego Lane’a.', '2015-10-08', 0, 24, 1, 2),
(25, 'Składam się z ciągłych powtórzeń', 'Pierwszy solowy album studyjny polskiego wokalisty i kompozytora Artura Rojka wydany nakładem wytwórni muzycznej Kayax. Premiera wydawnictwa miała miejsce 4 kwietnia 2014 roku. Płytę poprzedził wydany 24 lutego 2014 roku singel "Beksa", do którego powstał również teledysk. Wydawnictwo zawiera 10 utworów, spośród których dwa są kompozycjami zaprezentowanymi szerszej publiczności wcześniej. Album uzyskał certyfikat platynowej płyty. ', '2015-12-07', 0, 25, 1, 1),
(26, 'Robaki', 'Nowy album to jedna z najbardziej oczekiwanych płyt 2012 roku. Bezkompromisowe i mocne brzmienie! 13 nowych utworów o nietuzinkowych tekstach wyśpiewywanych ostrym wokalem Lizty i łagodnym głosem Hansa. Wyjątkowe, dwupłytowe wydawnictwo. Na drugim krążku znajdziemy instrumentalne wersje nowych utwórów + 6 bonusowych nagrań. \r\nPłyta została wydana w formie bogato ilustrowanej książki z tekstami i rysunkami Litzy. ', '0000-00-00', 0, 26, 1, 1),
(27, 'Dzieciom', 'Choć tytuł nawiązuje do Brzechwy i jego „Brzechwa dzieciom”, nie jest to wcale płyta dla dzieci. Raczej dla dorosłych dzieci, dla tych, którzy mają dzieci i dla wszystkich, którzy byli kiedyś dziećmi. Teksty Spiętego to rozważania na temat dziecięcych pytań i odpowiedzi na nie. \r\nProdukcją płyty „Dzieciom” zajął się Piotr „Emade” Waglewski.', '0000-00-00', 0, 27, 1, 1),
(28, 'Soundtrack', '17 października nakładem Mystic Production ukazała się piąta płyta Lao Che zatytułowana „Soundtrack”. Producentem odpowiedzialnym za brzmienie nowego materiału jest Eddie Stevens, brytyjski muzyk i producent związany z takimi artystami jak Moloko, Zero 7 czy Roisin Murphy. Po płycie "Prąd stały/prąd zmienny" zespół zainspirowany klasycznymi albumami z muzyką filmową postanowił przygotować płytę, która dzięki swojej różnorodności i koncepcji stanowiłaby autorski „Soundtrack”. ', '0000-00-00', 0, 28, 1, 1),
(29, 'Historia pewnej podróży', 'Jedenasty album polskiego wykonawcy poezji śpiewanej Grzegorza Turnaua, wydany 24 listopada 2006 roku przez Pomaton EMI. Płyta zawiera nowe aranżacje piosenek Marka Grechuty w wykonaniu Grzegorza Turnaua. Album nagrywano od lipca do października 2006 w studio "Nieustraszeni Łowcy Dźwięków" w Krakowie, jak również w Sound and More i Sonus w Warszawie.', '0000-00-00', 0, 29, 1, 6),
(30, 'Face Value', 'Solowa kariera artysty, który sprzedał na całym świecie ponad 100 mln płyt (solo i z grupą Genesis), zaczęła się na początku lat 80. W lutym 1981 roku ukazał się debiutancki materiał Phila Collinsa, zatytułowany "Face Value". Zdobył szczyt zestawienia w Wielkiej Brytanii i przyniósł megahit „In The Air Tonight”. Płyta aż pięć razy pokryła się platyną w ojczyźnie muzyka oraz w Stanach Zjednoczonych. W nagraniach wspomógł Collinsa sam Eric Clapton.', '0000-00-00', 0, 30, 1, 2),
(31, 'But seriously', 'Czwarty album studyjny Phila Collinsa. Wydany w dwóch wersjach, dostępnej w większości krajów i specjalnej japońskiej, różniącej się kolejnością utworów i zawierającej dwie dodatkowe piosenki "Saturday Night And Sunday Morning" i "Heat on the Street". Tematyka albumu, zgodnie z tytułem, jest poważniejsza niż poprzednich płyt Collinsa. Występują piosenki poruszające poważne problemy społeczne ("Another Day in Paradise").', '0000-00-00', 0, 31, 1, 2),
(32, 'Splot', 'Leski to nowy polski singer/songwriter. Mantrowe melodie, magnetyczny wokal i intymne teksty sprawiają, że jego muzyka stawiana jest na półce obok twórczości Bena Howarda, czy Jose Gonzalesa. Leski bawi się kontrastami. „Składam słowa. Scalam dźwięki. Śpiewam. Cieszą mnie pogranicza gatunkowe. Mandoliny i syntezatory analogowe. Gitary i znaczenia” - mówi. \r\nSzerszej publiczności dał się poznać EPką „Zaczyn“ wydaną w kwietniu 2014 roku. ', '0000-00-00', 0, 32, 1, 2),
(33, 'Kosmonauta', 'Leski to nowy polski singer/songwriter. Mantrowe melodie, magnetyczny wokal i intymne teksty sprawiają, że jego muzyka stawiana jest na półce obok twórczości Bena Howarda, czy Jose Gonzalesa. Leski bawi się kontrastami. „Składam słowa. Scalam dźwięki. Śpiewam. Cieszą mnie pogranicza gatunkowe. Mandoliny i syntezatory analogowe. Gitary i znaczenia” - mówi. \r\nSzerszej publiczności dał się poznać EPką „Zaczyn“ wydaną w kwietniu 2014 roku. ', '0000-00-00', 0, 33, 1, 2),
(34, 'Ze sceny', 'Po zbiorczych wydaniach pełnej dyskografii Jacka Kaczmarskiego pora na najcenniejsze, niewydane jeszcze materiały. ZE SCENY to boks składający się z 20 płyt. Mieści się na nich 13 koncertów, pochodzących z lat 1981-2001, oraz zbiór materiałów dodatkowych. Oprócz wyjątkowej wartości artystycznej, prezentowany materiał charakteryzuje się też świetną jakością techniczną – aż 9 spośród koncertów nagranych zostało cyfrowo.', '0000-00-00', 0, 34, 1, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `album_band`
--

CREATE TABLE `album_band` (
  `id_album_band` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `id_band` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `album_band`
--

INSERT INTO `album_band` (`id_album_band`, `id_album`, `id_band`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 19, 19),
(20, 20, 20),
(21, 21, 21),
(22, 22, 22),
(23, 23, 28),
(24, 24, 29),
(25, 25, 30),
(26, 26, 25),
(27, 27, 31),
(28, 28, 31),
(29, 29, 2),
(30, 30, 28),
(31, 31, 28),
(32, 32, 32),
(33, 33, 32),
(34, 34, 33),
(63, 24, 29);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `band`
--

CREATE TABLE `band` (
  `id_band` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `band`
--

INSERT INTO `band` (`id_band`, `name`) VALUES
(1, 'Ella Eyre'),
(2, 'Grzegorz Turnau'),
(3, 'Dorota Miśkiewicz'),
(4, 'Sławek Wierzcholski'),
(5, 'Bruce Springsteen'),
(6, 'Andrzej Zaucha'),
(7, 'Norah Jones'),
(8, 'Leny Kravitz'),
(9, 'James Morrison'),
(10, 'Robert Kasprzycki'),
(11, 'SDM'),
(12, 'Frank Sinatra'),
(13, 'Dom o Zielonych Progach'),
(14, 'Różni'),
(15, 'Sobota'),
(16, 'U2'),
(17, 'Eminem'),
(18, 'Tadeusz Nalepa'),
(19, 'Diana Krall'),
(20, 'Paweł Kukiz'),
(21, 'Indios Bravos'),
(22, 'Sam Smith'),
(23, 'Krzysztof Krawczyk'),
(24, 'Kuba Badach'),
(25, 'Luxtorpeda'),
(26, 'Adele'),
(28, 'Phil Collins'),
(29, 'Simply Red'),
(30, 'Artur Rojek'),
(31, 'Lao Che'),
(32, 'Leski'),
(33, 'Jacek Kaczmarski'),
(34, 'dadds'),
(35, 'Maryla Rodowicz'),
(38, 'aaa'),
(39, 'John Legend'),
(40, 'Muse'),
(43, 'Muserr'),
(44, 'asdasds'),
(45, 'dasdaa'),
(46, 'dasdsas');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text COLLATE utf8_polish_ci NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `comment`
--

INSERT INTO `comment` (`id_comment`, `id_user`, `text`, `id_album`) VALUES
(2, 2, 'Świetna płyta! Polecam!', 25),
(32, 7, 'Lubię!', 25),
(104, 5, 'Świetna płyta! :)', 16),
(106, 5, 'Warto posłuchać :)', 5),
(107, 2, 'Polecam', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre_name` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `genre`
--

INSERT INTO `genre` (`id_genre`, `genre_name`) VALUES
(1, 'rock'),
(2, 'pop'),
(3, 'jazz'),
(4, 'soul'),
(5, 'blues'),
(6, 'poezja spiewana'),
(7, 'r&b'),
(8, 'muzyka klasyczna'),
(9, 'metal'),
(10, 'reggae'),
(11, 'piosenka turystyczna'),
(12, 'disco polo'),
(13, 'hip-hop'),
(14, 'muzyka filmowa'),
(15, 'dance');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `track`
--

CREATE TABLE `track` (
  `id_track` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_polish_ci NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `track`
--

INSERT INTO `track` (`id_track`, `name`, `id_album`) VALUES
(1, 'Cadillac Ranch', 5),
(2, 'Independence Day', 5),
(3, 'Badlands', 5),
(4, 'Because the Night', 5),
(5, 'Beksa', 25),
(6, 'Czas który pozostał', 25),
(7, 'Krótkie momenty skupienia', 25),
(11, 'Syreny', 25);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(64) CHARACTER SET latin1 NOT NULL,
  `password` varchar(64) CHARACTER SET latin1 NOT NULL,
  `email` varchar(64) CHARACTER SET latin1 NOT NULL,
  `id_user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `email`, `id_user_type`) VALUES
(1, 'admin', 'admin', 'admina@poczta.pl', 1),
(2, 'alex', 'kot', 'alek@fsd', 1),
(3, 'aaa', 'aaa', 'aaa', 1),
(4, 'ddaa', 'ddaa', 'ddaa', 1),
(5, 'joanna', 'czajka', 'jczajka92@gmail.com', 1),
(7, 'user79', 'user79', 'user79@op.pl', 1),
(8, 'student', 'student', 'student@gmail.com', 1),
(9, 'aaa', 'ddd', 'aaa@wp.pl', 1),
(10, 'jan', 'nowak', 'jan@op.pl', 1),
(11, 'alex', 'alex', 'alex@wp.pl', 1),
(12, 'uzytkownik', 'uzytkownik', 'user67@prz.edu.pl', 1),
(13, 'nexus', 'nexus', 'nexus4@wp.pl', 1),
(14, 'jan', 'jan', 'jan@wp.pl', 1),
(15, 'ffff', 'fff', 'aaa@wp.pl', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_type`
--

CREATE TABLE `user_type` (
  `id_user_type` int(11) NOT NULL,
  `type` varchar(64) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user_type`
--

INSERT INTO `user_type` (`id_user_type`, `type`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD UNIQUE KEY `cover` (`cover`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indexes for table `album_band`
--
ALTER TABLE `album_band`
  ADD PRIMARY KEY (`id_album_band`),
  ADD KEY `id_album` (`id_album`),
  ADD KEY `id_band` (`id_band`);

--
-- Indexes for table `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`id_band`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id_track`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_type` (`id_user_type`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id_user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT dla tabeli `album_band`
--
ALTER TABLE `album_band`
  MODIFY `id_album_band` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT dla tabeli `band`
--
ALTER TABLE `band`
  MODIFY `id_band` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT dla tabeli `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT dla tabeli `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT dla tabeli `track`
--
ALTER TABLE `track`
  MODIFY `id_track` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT dla tabeli `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id_user_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);

--
-- Ograniczenia dla tabeli `album_band`
--
ALTER TABLE `album_band`
  ADD CONSTRAINT `album_band_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`),
  ADD CONSTRAINT `album_band_ibfk_2` FOREIGN KEY (`id_band`) REFERENCES `band` (`id_band`);

--
-- Ograniczenia dla tabeli `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`);

--
-- Ograniczenia dla tabeli `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `track_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`);

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user_type`) REFERENCES `user_type` (`id_user_type`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
