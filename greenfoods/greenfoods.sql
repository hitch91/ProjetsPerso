-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 19 nov. 2019 à 01:45
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `greenfoods`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `mdp`, `admin`) VALUES
(1, 'admin@admin.com', '$2y$10$LP4lMJRCbhe0QkuM1FTsA.82wnAefMjYPz1xTcjAej4bJZjp4O11G', 1);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `adresse` text NOT NULL,
  `appartement` int(11) DEFAULT NULL,
  `ville` varchar(32) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `telephone` int(20) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `date` varchar(32) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` varchar(32) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `sujet` varchar(32) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(4, 'Test', 'test@test.com', 'Test', 'Test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(5, 'Testt', 'test@test.com', 'Testtest', 'Test test test testtest test test testtest test test testtest test test testtest test test testtest test test testtest test test testtest test test testtest test test testtest test test testtest test test testtest test test test'),
(6, 'Test', 'test@test.com', 'Test', 'Testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `prix` float(11,2) NOT NULL,
  `url` text NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `type`, `prix`, `url`, `texte`) VALUES
(9, 'tomates', 'Fruits', 1.99, 'tomate', 'Ce fruit-légume est l’un des plus consommés en France, juste après la pomme de terre, qui est numéro un. Peut-être parce que ses milliers de variétés permettent quantités de recettes. Peut-être aussi parce que c’est l’un des fruit-légumes les plus produits.<br>\r\nBien que disponible sur les étals toute l’année, c’est une grossière erreur de croire que la tomate se mange pendant douze mois !<br>\r\nPour bien pousser, se remplir de goût à la fois sucré et légèrement acide, la tomate a vraiment besoin de chaleur et de soleil, il faut alors la déguster à sa véritable saison, de mai à septembre. Et se faire une raison le restant de l’année. Vous verrez comme elles sont bien meilleures en été qu’au mois de janvier.<br>\r\nUne tomate qui grandit bien et arrive à maturité possède une belle couleur rouge et un parfum à faire chavirer les narines, tout comme son pédoncule, qui doit également dégager une senteur verte tout à fait caractéristique.<br> Des variétés en France, on en connaît beaucoup : rondes, en grappe, allongées, cornues, Cœur de bœuf, noires de Crimée, zébrées, Marmandes et bien d’autres, on refait même revivre des variétés anciennes pour notre plus grand plaisir.'),
(10, 'poivrons', 'Legumes', 1.99, 'poivron', 'On peut consommer le poivron cru dans des salades composées aux saveurs méditerranéennes car il relèvera légèrement le goût de vos aliments.<br> Ce légume est idéal pour concocter de délicieuses sauces aigres-douces typiques des plats asiatiques ! Le poivron se marine également dans de l’huile avec un peu d’ail et des herbes aromatiques et compose de savoureux gaspachos.<br> Cuit, on peut le déguster farci, avec des légumes, du fromage, des féculents tels que le riz ou le quinoa ou avec de la viande hachée. Il agrémente très bien les tartes, pizza, gratins, omelettes, nouilles, pâtes… <br>Il est incontournable dans certaines spécialités comme le shakshuka par exemple, ou encore la ratatouille provençale, la piperade basque, la paella espagnole ou la caponata sicilienne. Le poivron est souvent incontournable dans les sauces basquaises, les plats mexicains ou andalous. Enfin, on peut également manger du poivron en version sucrée, comme avec cette recette de confiture !'),
(11, 'Ail', 'Legumes', 9.99, 'ail', 'L\'ail est utilisé essentiellement comme un aromate en cuisine. Son goût puissant relève tous les plats.<br> On le trouve frais en début de saison puis sec quand on s\'éloigne de la récolte.'),
(12, 'choux rouge', 'Legumes', 4.19, 'chouxRouge', 'Le chou rouge est un crucifère originaire d\'Europe Centrale. C\'est un légume très apprécié. Le chou rouge porte mal son nom : sa couleur se rapproche davantage du violet.'),
(13, 'carottes', 'Legumes', 1.69, 'carotte', 'La carotte est originaire d’Asie Mineure. Autrefois elle était utilisée pour ses valeurs thérapeutiques. Elle devient très consommée à partir du Moyen Âge car elle ne coûte pas cher.<br> Depuis, elle a été améliorée et plusieurs variétés sont nées. Vous ne le saviez peut-être pas mais au départ, la carotte était blanche.<br> Et oui, comme elle pousse sous terre, elle ne voit pas le soleil, c’est pourquoi elle n’est pas pigmentée. La carotte est orange seulement depuis le 19ème siècle. Elle est issue d’un croisement entre une carotte rouge (cultivée sous serre) et d’une carotte blanche. <br>Toutes les variétés que nous consommons aujourd’hui sont issues de croisements entre les anciennes carottes blanches. Les croisements ont eu lieu au cours du développement de la carotte dans le monde.'),
(14, 'brocolis', 'Fruits', 3.99, 'brocoli', 'De la même famille que le chou sauvage et le chou-fleur, le nom “brocoli” est en réalité un diminutif issu de l’italien “brocco” qui signifie “pousse”. Ce légume est dégusté depuis des millénaires pour son goût et ses bienfaits pour la santé.'),
(15, 'Fraises', 'Fruits', 11.99, 'fraise', 'Dans l’Antiquité, la fraise était très utilisée dans les produits de beauté pour sa fragrance particulièrement exquise ! Crème, masques ou soin pour les cheveux, la fraise était partout !'),
(16, 'petits pois', 'Legumes', 2.99, 'petitPois', 'Le pois, quelle que soit son appellation, est bon pour notre santé. Ce pois de choix se consomme aussi bien cuit que cru tant il est délicat.<br> Cru (ou cuit) en salade avec huile d’olive et jus de citron, son goût légèrement sucré en fait une entrée audacieuse et agréable.<br> Cuit, rien ne sert de le laisser mijoter trop longtemps dans l’eau ou à la vapeur. Le pois se contente de peu de cuisson. À peine blanchi à l’eau bouillante, c’est déjà très bon !<br> Il apporte de la fraîcheur à vos woks et c’est un ingrédient de base dans de nombreuses recettes asiatiques qu’il agrémente à la perfection.<br> D’ailleurs, vous remarquerez qu’il se marie très bien avec de la sauce soja. Il apporte un goût subtil à vos poêlées, tout simplement avec de l’ail ou des lardons. Il peut se préparer même en purée, en omelette, ou en potée pour varier les plaisirs culinaires.'),
(17, 'oignons rouges', 'Legumes', 3.99, 'oignon', 'Consommé depuis l\'Antiquité, l\'oignon fait parti des aromates indispensables à notre cuisine ! L\'oignon rouge, sec ou frais, possède une enveloppe rouge, sa chair est rouge violacée et blanche. Sa saveur est beaucoup plus douce que l\'oignon jaune.'),
(18, 'piments', 'Legumes', 13.95, 'piment', 'Le poivron contient de la capsaïcine. Elle est responsable du goût piquant du piment. L\'eau n\'a pas d\'effet sur son action en revanche la caséine du lait atténue la sensation de brûlure.'),
(19, 'pommes', 'Fruits', 2.99, 'pomme', 'Savourée depuis l’époque de la Préhistoire sur les plateaux d’Asie centrale, la pomme nous parvient en Europe avec l’expansion humaine et l’arrivée de l’agriculture du Néolithique ! Ca nous rajeunit pas tout ça !<br> Aujourd’hui, sa production européenne pour 2016 est de 12 millions de tonnes dont 1,5 millions de tonnes pour la France ! C’est sans contestation le fruit préféré des français et on estime même sa consommation par ménage à 18 kg/an.\r\n'),
(20, 'Jus de Fruits de saison', 'Jus', 3.00, 'jus', 'Les jus sont pasteurisés. La date limite de consommation est indiquée sur le couvercle. Les jus se conservent jusqu’à quatre jours après ouverture au réfrigérateur.<br>\r\nIls sont parfaits pour vous accompagner à n’importe quel moment de la journée. '),
(21, 'amandes', 'Graines', 14.99, 'amande', 'L\'amande est un fruit à coque. Issue de l\'arbre appelé amandier, elle fait partie de la même famille que les pêches, les cerises ou encore les prunes !'),
(22, 'pistaches décortiquées', 'Graines', 18.99, 'pistache', 'Pensez aux pistaches en cas de faim, pour changer des noix, amandes et noisettes. Son petit goût caractéristique rafraîchira les papilles, et sa couleur verte enchante les yeux. Un plaisir pour les sens, cette petite pistache.'),
(24, 'Framboise', 'Fruits', 13.99, 'framboise', 'La framboise est un petit fruit rouge légèrement acidulé à la saveur très prononcée. Il en faut peu pour parfumer un bon yaourt ou une faisselle de fromage blanc. Peu sucrée, on peut la croquer sans compter !');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit_id` (`produit_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
