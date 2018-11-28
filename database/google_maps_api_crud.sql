-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 29 Kas 2018, 01:28:07
-- Sunucu sürümü: 5.7.24-0ubuntu0.18.04.1
-- PHP Sürümü: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `google_maps_api_crud`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` varchar(55) NOT NULL,
  `lng` varchar(55) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `description`) VALUES
(7, '36.99043858835327', '35.33148194378418', 'Adana'),
(8, '39.92505395831575', '32.83694386482239', 'Anıtkabir'),
(9, '41.04384712526781', '29.00176564671517', 'Istanbul / Besiktas'),
(15, '41.03912830065611', '28.98691177368164', 'Taksim Gezi Park #occupygezi'),
(16, '38.438100692097244', '27.141025161273774', 'Izmir / Kordon'),
(18, '40.87066342379578', '29.093013150799607', 'Istanbul / Heybeliada'),
(21, '37.03310930333903', '27.43064998433681', ''),
(22, '36.90433269687187', '30.80188751220703', 'Antalya Airport');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
