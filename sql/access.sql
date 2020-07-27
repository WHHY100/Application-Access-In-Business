
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `access`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `aplikacje_do_pobrania`
--

CREATE TABLE `aplikacje_do_pobrania` (
  `ID` int(11) NOT NULL,
  `Nazwa_aplikacji` varchar(1024) NOT NULL,
  `Opis` varchar(2048) NOT NULL,
  `Video_reprezentacyjne` varchar(1024) NOT NULL,
  `Link_do_pobrania` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Struktura tabeli dla tabeli `content_page`
--

CREATE TABLE `content_page` (
  `id` int(11) NOT NULL,
  `strona_czesc` varchar(1024) DEFAULT NULL,
  `tresc` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `content_page`
--

INSERT INTO `content_page` (`id`, `strona_czesc`, `tresc`) VALUES
(1, 'naglowek_glowna_strona', 'test'),
(2, 'naglowek_kurs_sql', 'test'),
(3, 'naglowek_kurs_access', 'test'),
(4, 'naglowek_aplikacje', 'test'),
(5, 'przycisk_1', 'test'),
(6, 'przycisk_2', 'test'),
(7, 'przycisk_3', 'test'),
(8, 'przycisk_4', 'test'),
(9, 'zdjecie_sciezka', 'test'),
(10, 'opis_aplikacja_1', 'test'),
(11, 'opis_aplikacja_2', 'test'),
(12, 'strona_glowna_podnaglowek', 'test'),
(13, 'strona_czesc_o_autorze', 'test'),
(14, 'link_github', 'test'),
(15, 'Pobierz_aplikacje_tytul', 'test'),
(16, 'Pobierz_aplikacje_tresc', 'test'),
(18, 'kurs_sql_podtytul', 'test'),
(19, 'kurs_access_tytul', 'Kurs Access'),
(20, 'kurs_access_podtytul', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs_access`
--

CREATE TABLE `kurs_access` (
  `id` int(11) NOT NULL,
  `Nazwa_odcinka` varchar(2048) NOT NULL,
  `film` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Struktura tabeli dla tabeli `kurs_sql`
--

CREATE TABLE `kurs_sql` (
  `id` int(11) NOT NULL,
  `Nazwa_odcinka` varchar(2048) NOT NULL,
  `film` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `aplikacje_do_pobrania`
--
ALTER TABLE `aplikacje_do_pobrania`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `content_page`
--
ALTER TABLE `content_page`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kurs_access`
--
ALTER TABLE `kurs_access`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kurs_sql`
--
ALTER TABLE `kurs_sql`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
