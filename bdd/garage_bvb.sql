-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2021 at 09:56 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage_bvb`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `release-date` date NOT NULL DEFAULT '2012-01-01',
  `price` float NOT NULL,
  `description` text NOT NULL,
  `addOption` text NOT NULL,
  `fuel` varchar(25) NOT NULL,
  `mileage` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `brandLogo` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `brand`, `model`, `year`, `release-date`, `price`, `description`, `addOption`, `fuel`, `mileage`, `picture`, `brandLogo`) VALUES
(1, 'Volkswagen', 'Tiguan 2.0 TDI', 2009, '2013-02-19', 8490, 'Volkswagen Tiguan 2.0 TDI 140 FAP BlueMotion Technology Sportline crossover\r\nSUV, gris, 8 cv, 5 portes, 5 places première mise en circulation le 19/02/2013.', 'OPTIONS ET EQUIPEMENTS :\r\nExtérieur :\r\n- barres de toit\r\n- rétroviseurs rabattables\r\n- vitres surteintées\r\n\r\nIntérieur et confort :\r\n- accoudoir central\r\n- ordinateur de bord\r\n- sièges sport\r\n- volant réglable\r\n- stop & start\r\n- volant cuir\r\n- radio CD\r\n- climatisation automatique\r\n\r\nSécurité :\r\n- détecteur de pluie\r\n- fermeture centralisée\r\n- ABS\r\n- airbags latéraux\r\n- anti-démarrage\r\n- ESP\r\n- phares antibrouillard\r\n- radar avant de détection d\'obstacles\r\n- radar arrière de détection d\'obstacles\r\n- aide au freinage d\'urgence\r\n- fixation ISOFIX\r\n\r\nAutres équipements et informations :\r\n- radar d\'aide au stationnement\r\n- vitres avant éléctriques\r\n- rétroviseur interieur electrochrome\r\n- airbag conducteur\r\n- verrouillage à distance\r\n- siège conducteur réglable en hauteur\r\n- siège passager réglable\r\n- Vitres arrières électriques\r\n- airbag coté passager\r\n- puissance réelle : 140 ch\r\n- nombre de rapports : 6 vitesses\r\n- consommation extra urbaine : 4,80 litres\r\n- consommation urbaine : 6,30 litres\r\n- consommation mixte : 5,30 litres\r\n- Puissance kilowatt : 103 kw\r\n- Sieges arrières rabattable\r\n- appuis-tête arrière\r\n- Ceinture centrale arrière 3 points\r\n- Détecteur de fatigue\r\n- Indicateur de température extérieur\r\n- Installation téléphone mains libres\r\n- Levier de vitesses en cuir\r\n- Oeïllets de fixation\r\n- Pare chocs couleur véhicule\r\n- Peinture métallisée\r\n- Éclairage de sol', 'Diesel', 178000, 'tiguan1.jpg', 'volk_logo.png'),
(2, 'Volkswagen', 'Scirocco', 2008, '2008-08-25', 7990, 'Volkswagen Scirocco 2.0 TSI 220 DSG6 Serie Limitee GTS coupé, noir, 13 cv, 3 portes, 4 places.\r\nCouleur intérieure : noir, première mise en circulation le 28/08/2008, garantie 6 mois.\r\n\r\n', 'OPTIONS ET EQUIPEMENTS :\r\nExtérieur :\r\n- allumage automatique des feux\r\n- toit ouvrant électrique\r\n- phares xenon\r\n- châssis sport\r\n- jantes alliage 18 pouces\r\n\r\nIntérieur et confort :\r\n- accoudoir central\r\n- ordinateur de bord\r\n- volant multifonctions\r\n- bluetooth\r\n- climatisation automatique\r\n- intérieur cuir\r\n\r\nSécurité :\r\n- fermeture centralisée\r\n- phares antibrouillard\r\n- fixation ISOFIX\r\n- régulateur de vitesse\r\n- Fatigue Détection : système de détection de fatigue du conducteur\r\n\r\nAutres équipements et informations :\r\n- consommation extra urbaine : 5,30 litres\r\n- consommation urbaine : 8,10 litres\r\n- consommation mixte : 6,40 litres\r\n- puissance réelle : 220 ch\r\n- émission CO2 : 148 g/km\r\n- roue de secours\r\n- verrouillage à distance\r\n- palettes au volant\r\n- turbo\r\n- clignotants LED\r\n- projecteurs bi-xénon\r\n- Aide au stationnement AV/AR avec signaux sonores et visualisation de la distance des obstacles sur l\'écran\r\n- Applications décoratives \"Piano Black\" pour le tableau de bord\r\n- Baguettes de seuils de portes avec logo \"GTS\"\r\n- Ciel de pavillon noir\r\n- Compteurs sport additionnels sur la planche de bord\r\n- Direction électromécanique à assistance variable en fonction de la vitesse\r\n- Double sortie d\'échappement chromée\r\n- Entrée d\'air AV inférieure et grille de calandre à lamelles noires\r\n- Etriers de frein rouge à l\'AV et à l\'AR\r\n- Feux AR à LED et eclairage de plaque a LED\r\n- Frein à main\r\n- levier de vitesses\r\n- accoudoir central AV et volant avec surpiqûres rouges\r\n- Hill-Hold: Assistant au démarrage en côte grâce à une fonction anti-recul (maintien pendant 2 secondes après le relâchement de la pédale de frein)\r\n- Pare-chocs AV/AR et jupes latérales spécifiques couleur carrosserie\r\n- Pédalier type aluminium\r\n- réglage dynamique du site des phares\r\n- Rétroviseur intérieur jour/nuit automatique\r\n- Rétroviseurs extérieurs noirs électriques et dégivrants\r\n- Sellerie Tissu spécifique \"GTS\"\r\n- Sièges AV Sport avec réglage en hauteur\r\n- Spoiler AR spécifique couleur carrosserie\r\n- Système Navigation & Infotainment \"Discover Media\"\r\n- Tapis de sol spécifique \"GTS\"\r\n- Témoin d\'usure des garnitures de freins\r\n- Vitres AR et lunette AR surteintées à 65 %\r\n- Keyless Access\r\n- Light Assist\r\n- Ordinateur de bord Premium', 'Essence', 237000, 'scirocco1.jpg', 'volk_logo.png'),
(3, 'Range Rover', 'Évoque SD4 190 ch Prestige', 2013, '2013-12-13', 22990, 'Land Rover Range Rover Evoque SD4 190 Prestige BVA9 tout-terrain, rouge, 11 cv, 5 portes, 5 places\r\nCouleur intérieure : beige, première mise en circulation le 13/12/2013, garantie 6 mois.', 'OPTIONS ET EQUIPEMENTS :\r\nExtérieur :\r\n- allumage automatique des feux\r\n- toit panoramique\r\n- phares xenon\r\n- filtre à particules\r\n\r\nIntérieur et confort :\r\n- bluetooth\r\n- Non-fumeur\r\n- radio CD MP3\r\n- GPS tactile\r\n- intérieur cuir\r\n\r\nSécurité :\r\n- détecteur de pluie\r\n- phares antibrouillard\r\n- radar avant de détection d\'obstacles\r\n- régulateur de vitesse\r\n\r\nAutres équipements et informations :\r\n- consommation extra urbaine : 5,30 litres\r\n- consommation urbaine : 7,20 litres\r\n- consommation mixte : 6,00 litres\r\n- puissance réelle : 190 ch\r\n- émission CO2 : 159 g/km\r\n- radar d\'aide au stationnement\r\n- Puissance kilowatt : 140 kw\r\n- kit de dépannage pneumatique\r\n- Badge Evoque Couleur Noire\r\n- Colonne de direction à réglages manuels\r\n- Couvre-bagages rigide\r\n- Desserage progressif des freins en descente - GRC\r\n- Finition Satin Brushed Aluminium\r\n- Freins à disques à l\'AR\r\n- Freins à disques ventilés à l\'AV\r\n- Lampe de lecture AV\r\n- Miroir de courtoisie éclairé\r\n- Peinture vernie\r\n- PURE - Assises et dossiers des sièges en Cuir/Dinamica®\r\n- 4 roues Motrice\r\n- Vitres gravées\r\n- Détecteur d\'obstacle AV\r\n- Sièges AV électriques à mémoire conducteur\r\n- Sellerie cuir\r\n- Jantes 19\" Sparkle Silver - Style 4 (235/55)\r\n- Peinture métallisée\r\n- Rétroviseurs extérieurs chauffants\r\n- réglables et rabattables électriquement avec motif projeté Range Rover Evoque\r\n- Sièges AV chauffants\r\n- Lave Phares\r\n- Sono Méridian\r\n- Marche pieds\r\n- Entré et démarrage main libre\r\n- Véhicule origine France\r\n- Garantie 6 mois ( moteur\r\n- boite\r\n- pont )\r\n- suivi d\'entretien complet\r\n- révision à jour\r\n- aucun frais à prévoir\r\n- parfait état', 'Essence', 106000, 'evoc1.jpg', 'rr_logo.png'),
(4, 'BMW', '318d 143 ch F30 BVA8 Édition Sport', 2012, '2012-01-01', 13990, 'Bmw SERIE 3 (F30) 320D 163CH Efficient Dynamics, mise en circulation le 26-04-2012.\r\nGRIS C, 8cv, 4 portes, 5 places, couleur intérieur : BEIGE, longueur : 4,62 mètres,\r\nboîte de vitesse : manuelle', 'OPTIONS ET EQUIPEMENTS :\r\nAudio - Télécommunications\r\n- GPS Cartographique\r\n- Kit mains-libres Bluetooth\r\n- Navigation multimédia Professional\r\n- Prise Jack\r\n- Prise USB\r\n- Prise auxiliaire de connexion audio\r\n- Radio CD MP3 6HP\r\n- Volume automatique de la radio\r\n\r\nConduite\r\n- Aide au démarrage en pente\r\n- Capteur de Pluie\r\n- Capteur de luminosité\r\n- Démarrage sans clé\r\n- Limiteur de vitesse\r\n- Régulateur de vitesse\r\n\r\nExtérieur\r\n- Calandre chromée\r\n- Projecteurs bi-Xénon\r\n- Radar de recul AR\r\n- Rétroviseurs électriques\r\n- Sortie d\'échappement chromée\r\n\r\nIntérieur\r\n- Accoudoir central AR avec trappe à skis\r\n- Banquette 1/3-2/3\r\n- Banquette AR rabattable\r\n- Banquette arrière 3 places\r\n- Clim automatique bi-zones\r\n- Ecran multifonction couleur\r\n- Lampe de coffre\r\n- Levier vitesse cuir\r\n- Ordinateur de bord\r\n- Ouverture des vitres séquentielle\r\n- Prise 12V\r\n- Sièges AV réglables en hauteur\r\n- Verrouillage centralisé à distance\r\n- Vitres arrière électriques\r\n- Vitres électriques avant\r\n- Volant cuir + commandes audio au volant\r\n- Volant réglable en profondeur et hauteur\r\n\r\nSécurité\r\n- ABS\r\n- Aide au freinage d\'urgence\r\n- Airbags rideaux AV et AR\r\n- Antidémarrage électronique\r\n- Avertisseur d\'angle mort#\r\n- Contrôle de freinage en courbe\r\n- Contrôle élect. de la pression des pneus\r\n- ESP\r\n- Phares antibrouillard\r\n', 'Diesel', 136000, '318d1.jpg', 'bmw_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

CREATE TABLE `rdv` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `service` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `hour` varchar(255) NOT NULL,
  `commentary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`id`, `idUser`, `brand`, `model`, `year`, `service`, `type`, `date`, `hour`, `commentary`) VALUES
(13, 14, 'Renault', 'clio', 2015, 'Revision', 'Pneu, Plaquette, Disque', '2021-12-23', '15h', 'refz'),
(14, 2, 'Bmw', 'serie3 1.8 160ch', 2010, '', 'Pneu, Plaquette, Disque', '2021-12-22', '15h', 'eiruhgeiurzphbiuhbgp'),
(15, 2, 'Renault', 'clio', 1999, 'Revision', 'Pneu, Distribution', '2021-12-15', '17h', 'bsgehgre'),
(16, 2, 'Renault', 'clio', 1999, 'Revision', 'Pneu', '2021-12-29', '18h', 'gfzeeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `email`, `password`, `phone`, `address`, `city`, `postal`, `role`) VALUES
(1, 'Roccasalva', 'Antony', 'rocca83910@gmail.com', '$2y$10$H2RFWkH06otiRQab/U9/jOe40l4NBVtxZyzKem3CWuFNR00F6Wgay', 609308343, '27 grand rue', 'Pourrieres', 83910, 'admin'),
(2, 'nouveau a', 'prenom-a', 'a@gmail.com', '$2y$10$T438wXP7HGazNk4NJHVm5umtK02S0LiXzB7IjSxrh.qTbJolm0YHq', 111111111, 'boulevard a', 'aa', 23231, 'user'),
(3, 'b', 'b', 'b@gmail.com', '$2y$10$H/ZtcdINmgONXHGZQ1HLdOP5ucg1KgJLcJG68qIoESX8YsC2RCZre', 326235132, 'b', 'b', 15246, 'user'),
(4, 'd', 'd', 'd@gmail.com', '$2y$10$xTJtsbeDnZwJR06xf3Yg3.T0/WY8AvjRsI4vhO41tdA80o7rfjpFW', 215896325, 'd', 'd', 23569, 'user'),
(5, 'c', 'c', 'c@gmail.com', '$2y$10$Qf0y9YraFtlDP.Zc.1aFUOUMQq49HqElbjYV9qXFvUhIBBYBtTxgi', 523698523, 'c', 'c', 89652, 'admin'),
(14, 'Ecker', 'Johnny', 'ecker@gmail.com', '$2y$10$b.9D8C6IyWZjYQg0052JQOJLDApP/AZVkJyVy3Z3jSDycjsCvrL1u', 326598745, '2 rue du tacle', 'Marseille', 13001, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idUser` (`idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `fk_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
