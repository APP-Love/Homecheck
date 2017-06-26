-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 26 Juin 2017 à 03:47
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `automatisations`
--

CREATE TABLE `automatisations` (
  `id` int(255) NOT NULL,
  `id_piece` int(255) NOT NULL,
  `action` int(255) NOT NULL,
  `pieces` int(255) NOT NULL,
  `recurrence` int(255) NOT NULL,
  `heureDebut` time(6) NOT NULL,
  `heureFin` time(6) NOT NULL,
  `temperature` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `automatisations`
--

INSERT INTO `automatisations` (`id`, `id_piece`, `action`, `pieces`, `recurrence`, `heureDebut`, `heureFin`, `temperature`) VALUES
(35, 1, 2, 2, 1, '10:45:00.000000', '11:10:00.000000', 0);

-- --------------------------------------------------------

--
-- Structure de la table `capteuractionneur`
--

CREATE TABLE `capteuractionneur` (
  `numero de serie` int(255) NOT NULL,
  `id_piece` int(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `type` int(255) NOT NULL COMMENT '1: fumée',
  `description` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `capteuractionneur`
--

INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES
(135, 1, 'ABC', 1, 'Capteur de température', 1),
(136, 1, 'LUM1', 4, 'Capteur de lumière', 1),
(137, 2, 'ABC', 1, 'Capteur de température', 1),
(161, 1, 'mm', 2, 'Capteur humidité', 1),
(162, 1, '123', 1, 'Capteur de température', 1),
(163, 1, '101', 2, 'Capteur humidité', 1),
(204, 75, 'LUM1', 4, 'Capteur de lumière', 1);

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `id` int(255) NOT NULL,
  `id_piece` int(255) NOT NULL,
  `type` int(255) NOT NULL,
  `donneesphysiques` varchar(255) NOT NULL,
  `temps` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `information`
--

INSERT INTO `information` (`id`, `id_piece`, `type`, `donneesphysiques`, `temps`, `nom`) VALUES
(2094, 0, 1, '02,8C°', 0, 'Capteur température'),
(2095, 0, 1, '03,4C°', 0, 'Capteur température'),
(2096, 0, 2, '87%', 0, 'Capteur humidité'),
(2097, 0, 4, '87%', 0, 'Capteur lumière'),
(2098, 0, 4, '1', 0, 'Capteur lumière'),
(2099, 0, 1, '17,0C°', 0, 'Capteur température'),
(2100, 0, 1, '02,8C°', 0, 'Capteur température'),
(2101, 0, 1, '03,4C°', 0, 'Capteur température'),
(2102, 0, 2, '87%', 0, 'Capteur humidité'),
(2103, 0, 4, '87%', 0, 'Capteur lumière'),
(2104, 0, 4, '1', 0, 'Capteur lumière'),
(2105, 0, 1, '17,0C°', 0, 'Capteur température'),
(2106, 0, 1, '02,8C°', 0, 'Capteur température'),
(2107, 0, 1, '03,4C°', 0, 'Capteur température'),
(2108, 0, 2, '87%', 0, 'Capteur humidité'),
(2109, 0, 4, '87%', 0, 'Capteur lumière'),
(2110, 0, 4, '1', 0, 'Capteur lumière'),
(2111, 0, 1, '17,0C°', 0, 'Capteur température'),
(2112, 0, 1, '02,8C°', 0, 'Capteur température'),
(2113, 0, 1, '03,4C°', 0, 'Capteur température'),
(2114, 0, 2, '87%', 0, 'Capteur humidité'),
(2115, 0, 4, '87%', 0, 'Capteur lumière'),
(2116, 0, 4, '1', 0, 'Capteur lumière'),
(2117, 0, 1, '17,0C°', 0, 'Capteur température'),
(2118, 0, 1, '02,8C°', 0, 'Capteur température'),
(2119, 0, 1, '03,4C°', 0, 'Capteur température'),
(2120, 0, 2, '87%', 0, 'Capteur humidité'),
(2121, 0, 4, '87%', 0, 'Capteur lumière'),
(2122, 0, 4, '1', 0, 'Capteur lumière'),
(2123, 0, 1, '17,0C°', 0, 'Capteur température'),
(2124, 0, 1, '02,8C°', 0, 'Capteur température'),
(2125, 0, 1, '03,4C°', 0, 'Capteur température'),
(2126, 0, 2, '87%', 0, 'Capteur humidité'),
(2127, 0, 4, '87%', 0, 'Capteur lumière'),
(2128, 0, 4, '1', 0, 'Capteur lumière'),
(2129, 0, 1, '17,0C°', 0, 'Capteur température'),
(2130, 0, 1, '02,8C°', 0, 'Capteur température'),
(2131, 0, 1, '03,4C°', 0, 'Capteur température'),
(2132, 0, 2, '87%', 0, 'Capteur humidité'),
(2133, 0, 4, '87%', 0, 'Capteur lumière'),
(2134, 0, 4, '1', 0, 'Capteur lumière'),
(2135, 0, 1, '17,0C°', 0, 'Capteur température'),
(2136, 0, 1, '02,8C°', 0, 'Capteur température'),
(2137, 0, 1, '03,4C°', 0, 'Capteur température'),
(2138, 0, 2, '87%', 0, 'Capteur humidité'),
(2139, 0, 4, '87%', 0, 'Capteur lumière'),
(2140, 0, 4, '1', 0, 'Capteur lumière'),
(2141, 0, 1, '17,0C°', 0, 'Capteur température'),
(2142, 0, 1, '02,8C°', 0, 'Capteur température'),
(2143, 0, 1, '03,4C°', 0, 'Capteur température'),
(2144, 0, 2, '87%', 0, 'Capteur humidité'),
(2145, 0, 4, '87%', 0, 'Capteur lumière'),
(2146, 0, 4, '1', 0, 'Capteur lumière'),
(2147, 0, 1, '17,0C°', 0, 'Capteur température'),
(2148, 0, 1, '02,8C°', 0, 'Capteur température'),
(2149, 0, 1, '03,4C°', 0, 'Capteur température'),
(2150, 0, 2, '87%', 0, 'Capteur humidité'),
(2151, 0, 4, '87%', 0, 'Capteur lumière'),
(2152, 0, 4, '1', 0, 'Capteur lumière'),
(2153, 0, 1, '17,0C°', 0, 'Capteur température'),
(2154, 0, 1, '02,8C°', 0, 'Capteur température'),
(2155, 0, 1, '03,4C°', 0, 'Capteur température'),
(2156, 0, 2, '87%', 0, 'Capteur humidité'),
(2157, 0, 4, '87%', 0, 'Capteur lumière'),
(2158, 0, 4, '1', 0, 'Capteur lumière'),
(2159, 0, 1, '17,0C°', 0, 'Capteur température'),
(2160, 0, 1, '02,8C°', 0, 'Capteur température'),
(2161, 0, 1, '03,4C°', 0, 'Capteur température'),
(2162, 0, 2, '87%', 0, 'Capteur humidité'),
(2163, 0, 4, '87%', 0, 'Capteur lumière'),
(2164, 0, 4, '1', 0, 'Capteur lumière'),
(2165, 0, 1, '17,0C°', 0, 'Capteur température'),
(2166, 0, 1, '02,8C°', 0, 'Capteur température'),
(2167, 0, 1, '03,4C°', 0, 'Capteur température'),
(2168, 0, 2, '87%', 0, 'Capteur humidité'),
(2169, 0, 4, '87%', 0, 'Capteur lumière'),
(2170, 0, 4, '1', 0, 'Capteur lumière'),
(2171, 0, 1, '17,0C°', 0, 'Capteur température'),
(2172, 0, 1, '02,8C°', 0, 'Capteur température'),
(2173, 0, 1, '03,4C°', 0, 'Capteur température'),
(2174, 0, 2, '87%', 0, 'Capteur humidité'),
(2175, 0, 4, '87%', 0, 'Capteur lumière'),
(2176, 0, 4, '1', 0, 'Capteur lumière'),
(2177, 0, 1, '17,0C°', 0, 'Capteur température'),
(2178, 0, 1, '02,8C°', 0, 'Capteur température'),
(2179, 0, 1, '03,4C°', 0, 'Capteur température'),
(2180, 0, 2, '87%', 0, 'Capteur humidité'),
(2181, 0, 4, '87%', 0, 'Capteur lumière'),
(2182, 0, 4, '1', 0, 'Capteur lumière'),
(2183, 0, 1, '17,0C°', 0, 'Capteur température'),
(2184, 0, 1, '02,8C°', 0, 'Capteur température'),
(2185, 0, 1, '03,4C°', 0, 'Capteur température'),
(2186, 0, 2, '87%', 0, 'Capteur humidité'),
(2187, 0, 4, '87%', 0, 'Capteur lumière'),
(2188, 0, 4, '1', 0, 'Capteur lumière'),
(2189, 0, 1, '17,0C°', 0, 'Capteur température'),
(2190, 0, 1, '02,8C°', 0, 'Capteur température'),
(2191, 0, 1, '03,4C°', 0, 'Capteur température'),
(2192, 0, 2, '87%', 0, 'Capteur humidité'),
(2193, 0, 4, '87%', 0, 'Capteur lumière'),
(2194, 0, 4, '1', 0, 'Capteur lumière'),
(2195, 0, 1, '17,0C°', 0, 'Capteur température'),
(2196, 0, 1, '02,8C°', 0, 'Capteur température'),
(2197, 0, 1, '03,4C°', 0, 'Capteur température'),
(2198, 0, 2, '87%', 0, 'Capteur humidité'),
(2199, 0, 4, '87%', 0, 'Capteur lumière'),
(2200, 0, 4, '1', 0, 'Capteur lumière'),
(2201, 0, 1, '17,0C°', 0, 'Capteur température'),
(2202, 0, 1, '02,8C°', 0, 'Capteur température'),
(2203, 0, 1, '03,4C°', 0, 'Capteur température'),
(2204, 0, 2, '87%', 0, 'Capteur humidité'),
(2205, 0, 4, '87%', 0, 'Capteur lumière'),
(2206, 0, 4, '1', 0, 'Capteur lumière'),
(2207, 0, 1, '17,0C°', 0, 'Capteur température'),
(2208, 0, 1, '02,8C°', 0, 'Capteur température'),
(2209, 0, 1, '03,4C°', 0, 'Capteur température'),
(2210, 0, 2, '87%', 0, 'Capteur humidité'),
(2211, 0, 4, '87%', 0, 'Capteur lumière'),
(2212, 0, 4, '1', 0, 'Capteur lumière'),
(2213, 0, 1, '17,0C°', 0, 'Capteur température'),
(2214, 0, 1, '02,8C°', 0, 'Capteur température'),
(2215, 0, 1, '03,4C°', 0, 'Capteur température'),
(2216, 0, 2, '87%', 0, 'Capteur humidité'),
(2217, 0, 4, '87%', 0, 'Capteur lumière'),
(2218, 0, 4, '1', 0, 'Capteur lumière'),
(2219, 0, 1, '17,0C°', 0, 'Capteur température'),
(2220, 0, 1, '02,8C°', 0, 'Capteur température'),
(2221, 0, 1, '03,4C°', 0, 'Capteur température'),
(2222, 0, 2, '87%', 0, 'Capteur humidité'),
(2223, 0, 4, '87%', 0, 'Capteur lumière'),
(2224, 0, 4, '1', 0, 'Capteur lumière'),
(2225, 0, 1, '17,0C°', 0, 'Capteur température'),
(2226, 0, 1, '02,8C°', 0, 'Capteur température'),
(2227, 0, 1, '03,4C°', 0, 'Capteur température'),
(2228, 0, 2, '87%', 0, 'Capteur humidité'),
(2229, 0, 4, '87%', 0, 'Capteur lumière'),
(2230, 0, 4, '1', 0, 'Capteur lumière'),
(2231, 0, 1, '17,0C°', 0, 'Capteur température'),
(2232, 0, 1, '02,8C°', 0, 'Capteur température'),
(2233, 0, 1, '03,4C°', 0, 'Capteur température'),
(2234, 0, 2, '87%', 0, 'Capteur humidité'),
(2235, 0, 4, '87%', 0, 'Capteur lumière'),
(2236, 0, 4, '1', 0, 'Capteur lumière'),
(2237, 0, 1, '17,0C°', 0, 'Capteur température'),
(2238, 0, 1, '02,8C°', 0, 'Capteur température'),
(2239, 0, 1, '03,4C°', 0, 'Capteur température'),
(2240, 0, 2, '87%', 0, 'Capteur humidité'),
(2241, 0, 4, '87%', 0, 'Capteur lumière'),
(2242, 0, 4, '1', 0, 'Capteur lumière'),
(2243, 0, 1, '17,0C°', 0, 'Capteur température'),
(2244, 0, 1, '02,8C°', 0, 'Capteur température'),
(2245, 0, 1, '03,4C°', 0, 'Capteur température'),
(2246, 0, 2, '87%', 0, 'Capteur humidité'),
(2247, 0, 4, '87%', 0, 'Capteur lumière'),
(2248, 0, 4, '1', 0, 'Capteur lumière'),
(2249, 0, 1, '17,0C°', 0, 'Capteur température'),
(2250, 0, 1, '02,8C°', 0, 'Capteur température'),
(2251, 0, 1, '03,4C°', 0, 'Capteur température'),
(2252, 0, 2, '87%', 0, 'Capteur humidité'),
(2253, 0, 4, '87%', 0, 'Capteur lumière'),
(2254, 0, 4, '1', 0, 'Capteur lumière'),
(2255, 0, 1, '17,0C°', 0, 'Capteur température'),
(2256, 0, 1, '02,8C°', 0, 'Capteur température'),
(2257, 0, 1, '03,4C°', 0, 'Capteur température'),
(2258, 0, 2, '87%', 0, 'Capteur humidité'),
(2259, 0, 4, '87%', 0, 'Capteur lumière'),
(2260, 0, 4, '1', 0, 'Capteur lumière'),
(2261, 0, 1, '17,0C°', 0, 'Capteur température'),
(2262, 0, 1, '02,8C°', 0, 'Capteur température'),
(2263, 0, 1, '03,4C°', 0, 'Capteur température'),
(2264, 0, 2, '87%', 0, 'Capteur humidité'),
(2265, 0, 4, '87%', 0, 'Capteur lumière'),
(2266, 0, 4, '1', 0, 'Capteur lumière'),
(2267, 0, 1, '17,0C°', 0, 'Capteur température'),
(2268, 0, 1, '02,8C°', 0, 'Capteur température'),
(2269, 0, 1, '03,4C°', 0, 'Capteur température'),
(2270, 0, 2, '87%', 0, 'Capteur humidité'),
(2271, 0, 4, '87%', 0, 'Capteur lumière'),
(2272, 0, 4, '1', 0, 'Capteur lumière'),
(2273, 0, 1, '17,0C°', 0, 'Capteur température'),
(2274, 0, 1, '02,8C°', 0, 'Capteur température'),
(2275, 0, 1, '03,4C°', 0, 'Capteur température'),
(2276, 0, 2, '87%', 0, 'Capteur humidité'),
(2277, 0, 4, '87%', 0, 'Capteur lumière'),
(2278, 0, 4, '1', 0, 'Capteur lumière'),
(2279, 0, 1, '17,0C°', 0, 'Capteur température'),
(2280, 0, 1, '02,8C°', 0, 'Capteur température'),
(2281, 0, 1, '03,4C°', 0, 'Capteur température'),
(2282, 0, 2, '87%', 0, 'Capteur humidité'),
(2283, 0, 4, '87%', 0, 'Capteur lumière'),
(2284, 0, 4, '1', 0, 'Capteur lumière'),
(2285, 0, 1, '17,0C°', 0, 'Capteur température'),
(2286, 0, 1, '02,8C°', 0, 'Capteur température'),
(2287, 0, 1, '03,4C°', 0, 'Capteur température'),
(2288, 0, 2, '87%', 0, 'Capteur humidité'),
(2289, 0, 4, '87%', 0, 'Capteur lumière'),
(2290, 0, 4, '1', 0, 'Capteur lumière'),
(2291, 0, 1, '17,0C°', 0, 'Capteur température'),
(2292, 0, 1, '02,8C°', 0, 'Capteur température'),
(2293, 0, 1, '03,4C°', 0, 'Capteur température'),
(2294, 0, 2, '87%', 0, 'Capteur humidité'),
(2295, 0, 4, '87%', 0, 'Capteur lumière'),
(2296, 0, 4, '1', 0, 'Capteur lumière'),
(2297, 0, 1, '17,0C°', 0, 'Capteur température'),
(2298, 0, 1, '02,8C°', 0, 'Capteur température'),
(2299, 0, 1, '03,4C°', 0, 'Capteur température'),
(2300, 0, 2, '87%', 0, 'Capteur humidité'),
(2301, 0, 4, '87%', 0, 'Capteur lumière'),
(2302, 0, 4, '1', 0, 'Capteur lumière'),
(2303, 0, 1, '17,0C°', 0, 'Capteur température'),
(2304, 0, 1, '02,8C°', 0, 'Capteur température'),
(2305, 0, 1, '03,4C°', 0, 'Capteur température'),
(2306, 0, 2, '87%', 0, 'Capteur humidité'),
(2307, 0, 4, '87%', 0, 'Capteur lumière'),
(2308, 0, 4, '1', 0, 'Capteur lumière'),
(2309, 0, 1, '17,0C°', 0, 'Capteur température'),
(2310, 0, 1, '02,8C°', 0, 'Capteur température'),
(2311, 0, 1, '03,4C°', 0, 'Capteur température'),
(2312, 0, 2, '87%', 0, 'Capteur humidité'),
(2313, 0, 4, '87%', 0, 'Capteur lumière'),
(2314, 0, 4, '1', 0, 'Capteur lumière'),
(2315, 0, 1, '17,0C°', 0, 'Capteur température'),
(2316, 0, 1, '02,8C°', 0, 'Capteur température'),
(2317, 0, 1, '03,4C°', 0, 'Capteur température'),
(2318, 0, 2, '87%', 0, 'Capteur humidité'),
(2319, 0, 4, '87%', 0, 'Capteur lumière'),
(2320, 0, 4, '1', 0, 'Capteur lumière'),
(2321, 0, 1, '17,0C°', 0, 'Capteur température'),
(2322, 0, 1, '02,8C°', 0, 'Capteur température'),
(2323, 0, 1, '03,4C°', 0, 'Capteur température'),
(2324, 0, 2, '87%', 0, 'Capteur humidité'),
(2325, 0, 4, '87%', 0, 'Capteur lumière'),
(2326, 0, 4, '1', 0, 'Capteur lumière'),
(2327, 0, 1, '17,0C°', 0, 'Capteur température'),
(2328, 0, 1, '02,8C°', 0, 'Capteur température'),
(2329, 0, 1, '03,4C°', 0, 'Capteur température'),
(2330, 0, 2, '87%', 0, 'Capteur humidité'),
(2331, 0, 4, '87%', 0, 'Capteur lumière'),
(2332, 0, 4, '1', 0, 'Capteur lumière'),
(2333, 0, 1, '17,0C°', 0, 'Capteur température'),
(2334, 0, 1, '02,8C°', 0, 'Capteur température'),
(2335, 0, 1, '03,4C°', 0, 'Capteur température'),
(2336, 0, 2, '87%', 0, 'Capteur humidité'),
(2337, 0, 4, '87%', 0, 'Capteur lumière'),
(2338, 0, 4, '1', 0, 'Capteur lumière'),
(2339, 0, 1, '17,0C°', 0, 'Capteur température'),
(2340, 0, 1, '02,8C°', 0, 'Capteur température'),
(2341, 0, 1, '03,4C°', 0, 'Capteur température'),
(2342, 0, 2, '87%', 0, 'Capteur humidité'),
(2343, 0, 4, '87%', 0, 'Capteur lumière'),
(2344, 0, 4, '1', 0, 'Capteur lumière'),
(2345, 0, 1, '17,0C°', 0, 'Capteur température'),
(2346, 0, 1, '02,8C°', 0, 'Capteur température'),
(2347, 0, 1, '03,4C°', 0, 'Capteur température'),
(2348, 0, 2, '87%', 0, 'Capteur humidité'),
(2349, 0, 4, '87%', 0, 'Capteur lumière'),
(2350, 0, 4, '1', 0, 'Capteur lumière'),
(2351, 0, 1, '17,0C°', 0, 'Capteur température'),
(2352, 0, 1, '02,8C°', 0, 'Capteur température'),
(2353, 0, 1, '03,4C°', 0, 'Capteur température'),
(2354, 0, 2, '87%', 0, 'Capteur humidité'),
(2355, 0, 4, '87%', 0, 'Capteur lumière'),
(2356, 0, 4, '1', 0, 'Capteur lumière'),
(2357, 0, 1, '17,0C°', 0, 'Capteur température'),
(2358, 0, 1, '02,8C°', 0, 'Capteur température'),
(2359, 0, 1, '03,4C°', 0, 'Capteur température'),
(2360, 0, 2, '87%', 0, 'Capteur humidité'),
(2361, 0, 4, '87%', 0, 'Capteur lumière'),
(2362, 0, 4, '1', 0, 'Capteur lumière'),
(2363, 0, 1, '17,0C°', 0, 'Capteur température'),
(2364, 0, 1, '02,8C°', 0, 'Capteur température'),
(2365, 0, 1, '03,4C°', 0, 'Capteur température'),
(2366, 0, 2, '87%', 0, 'Capteur humidité'),
(2367, 0, 4, '87%', 0, 'Capteur lumière'),
(2368, 0, 4, '1', 0, 'Capteur lumière'),
(2369, 0, 1, '17,0C°', 0, 'Capteur température'),
(2370, 0, 1, '02,8C°', 0, 'Capteur température'),
(2371, 0, 1, '03,4C°', 0, 'Capteur température'),
(2372, 0, 2, '87%', 0, 'Capteur humidité'),
(2373, 0, 4, '87%', 0, 'Capteur lumière'),
(2374, 0, 4, '1', 0, 'Capteur lumière'),
(2375, 0, 1, '17,0C°', 0, 'Capteur température'),
(2376, 0, 1, '02,8C°', 0, 'Capteur température'),
(2377, 0, 1, '03,4C°', 0, 'Capteur température'),
(2378, 0, 2, '87%', 0, 'Capteur humidité'),
(2379, 0, 4, '87%', 0, 'Capteur lumière'),
(2380, 0, 4, '1', 0, 'Capteur lumière'),
(2381, 0, 1, '17,0C°', 0, 'Capteur température'),
(2382, 0, 1, '02,8C°', 0, 'Capteur température'),
(2383, 0, 1, '03,4C°', 0, 'Capteur température'),
(2384, 0, 2, '87%', 0, 'Capteur humidité'),
(2385, 0, 4, '87%', 0, 'Capteur lumière'),
(2386, 0, 4, '1', 0, 'Capteur lumière'),
(2387, 0, 1, '17,0C°', 0, 'Capteur température'),
(2388, 0, 1, '02,8C°', 0, 'Capteur température'),
(2389, 0, 1, '03,4C°', 0, 'Capteur température'),
(2390, 0, 2, '87%', 0, 'Capteur humidité'),
(2391, 0, 4, '87%', 0, 'Capteur lumière'),
(2392, 0, 4, '1', 0, 'Capteur lumière'),
(2393, 0, 1, '17,0C°', 0, 'Capteur température'),
(2394, 0, 1, '02,8C°', 0, 'Capteur température'),
(2395, 0, 1, '03,4C°', 0, 'Capteur température'),
(2396, 0, 2, '87%', 0, 'Capteur humidité'),
(2397, 0, 4, '87%', 0, 'Capteur lumière'),
(2398, 0, 4, '1', 0, 'Capteur lumière'),
(2399, 0, 1, '17,0C°', 0, 'Capteur température'),
(2400, 0, 1, '02,8C°', 0, 'Capteur température'),
(2401, 0, 1, '03,4C°', 0, 'Capteur température'),
(2402, 0, 2, '87%', 0, 'Capteur humidité'),
(2403, 0, 4, '87%', 0, 'Capteur lumière'),
(2404, 0, 4, '1', 0, 'Capteur lumière'),
(2405, 0, 1, '17,0C°', 0, 'Capteur température'),
(2406, 0, 1, '02,8C°', 0, 'Capteur température'),
(2407, 0, 1, '03,4C°', 0, 'Capteur température'),
(2408, 0, 2, '87%', 0, 'Capteur humidité'),
(2409, 0, 4, '87%', 0, 'Capteur lumière'),
(2410, 0, 4, '1', 0, 'Capteur lumière'),
(2411, 0, 1, '17,0C°', 0, 'Capteur température'),
(2412, 0, 1, '02,8C°', 0, 'Capteur température'),
(2413, 0, 1, '03,4C°', 0, 'Capteur température'),
(2414, 0, 2, '87%', 0, 'Capteur humidité'),
(2415, 0, 4, '87%', 0, 'Capteur lumière'),
(2416, 0, 4, '1', 0, 'Capteur lumière'),
(2417, 0, 1, '17,0C°', 0, 'Capteur température'),
(2418, 0, 1, '02,8C°', 0, 'Capteur température'),
(2419, 0, 1, '03,4C°', 0, 'Capteur température'),
(2420, 0, 2, '87%', 0, 'Capteur humidité'),
(2421, 0, 4, '87%', 0, 'Capteur lumière'),
(2422, 0, 4, '1', 0, 'Capteur lumière'),
(2423, 0, 1, '17,0C°', 0, 'Capteur température'),
(2424, 0, 1, '02,8C°', 0, 'Capteur température'),
(2425, 0, 1, '03,4C°', 0, 'Capteur température'),
(2426, 0, 2, '87%', 0, 'Capteur humidité'),
(2427, 0, 4, '87%', 0, 'Capteur lumière'),
(2428, 0, 4, '1', 0, 'Capteur lumière'),
(2429, 0, 1, '17,0C°', 0, 'Capteur température');

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  `typelogement` int(2) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` int(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `superficie` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `logement`
--

INSERT INTO `logement` (`id`, `id_utilisateur`, `typelogement`, `adresse`, `codepostal`, `ville`, `superficie`) VALUES
(1, 1, 2, '57 rue Sedaine', 75011, 'PARIS', 50),
(45, 1, 1, '238 RUE MAULOIS', 77550, 'MOISSY-CRAMAYEL', 4554),
(46, 1, 1, '238 RUE MAULOIS', 77550, 'MOISSY-CRAMAYEL', 12),
(47, 1, 1, '77bis avenue de breteuil', 75015, 'Paris', 444),
(48, 6, 1, '238 RUE MAULOIS', 77550, 'MOISSY-CRAMAYEL', 77),
(49, 20, 1, '45 rue de Vanves', 75006, 'Paris', 44554);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `nom`, `mail`, `telephone`, `message`) VALUES
(2, 'iribarne', 'natho-metal@hotmail.fr', '00000000', 'test'),
(3, 'iribarne', 'natho-metal@hotmail.fr', '00000000', 'test'),
(4, 'manon', 'iribarne.manon@gmail.com', '000000000', 'helo'),
(5, 'SUBLIME', 'iribarne.manon@gmail.com', '0758391321', 'luc'),
(6, 'jjsnsx', 'manon@juniorisep.com', '0758391323', 'manon'),
(7, 'rodin', 'loli@hksqd.com', '0758391320', 'try'),
(8, 'tujkl', 'miribarne@juniorisep.com', '00000000', 'on essai');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `idp` int(255) NOT NULL,
  `id_logement` int(255) NOT NULL,
  `nombredecapteurs` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`idp`, `id_logement`, `nombredecapteurs`, `nom`) VALUES
(1, 1, 3, 'SALON'),
(2, 1, 1, 'SALLE DE BAIN'),
(3, 1, 3, 'CHAMBRE'),
(61, 45, 0, 'SALON'),
(62, 45, 0, 'CHAMBRE1'),
(63, 45, 0, 'CHAMBRE2'),
(64, 45, 0, 'CUISINE'),
(65, 46, 0, 'CHAMBRE2'),
(66, 46, 0, 'CUISINE'),
(67, 1, 0, 'SALON'),
(68, 1, 0, 'CHAMBRE'),
(69, 1, 0, 'CUISINE'),
(70, 1, 0, 'SALON'),
(71, 1, 0, 'SALON'),
(72, 1, 0, 'CHAMBRE'),
(73, 47, 0, 'SALON'),
(74, 47, 0, 'CHAMBRE1'),
(75, 48, 0, 'SALON'),
(76, 48, 0, 'CHAMBRE1'),
(77, 48, 0, 'CUISINE'),
(78, 48, 0, 'SALLE DE BAIN1'),
(79, 48, 0, 'GARAGE'),
(80, 48, 0, 'GARAGE'),
(81, 49, 0, 'SALON'),
(82, 49, 0, 'CHAMBRE1'),
(83, 49, 0, 'CUISINE'),
(84, 49, 0, 'GARAGE');

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `capteur` varchar(250) NOT NULL,
  `reference` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reference`
--

INSERT INTO `reference` (`id`, `capteur`, `reference`) VALUES
(1, 'HUMIDITE', '101'),
(2, 'HUMIDITE', '102'),
(3, 'HUMIDITE', '103'),
(4, 'TEMPERATURE', 'ABC'),
(5, 'TEMPERATURE', 'DEF'),
(6, 'TEMPERATURE', 'GHI'),
(7, 'FENETRE', '1A1'),
(8, 'FENETRE', '2B2'),
(9, 'FENETRE', '3C3'),
(10, 'LUMIERE', 'LUM1'),
(11, 'LUMIERE', 'LUM2'),
(12, 'LUMIERE', 'LUM3');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `identifiant` varchar(100) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `dateDEnaissance` date NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` int(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `type` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `droitprofil` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `droitajoutlog` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `droitajoutcap` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `droitaction` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `droitphoto` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `droitauto` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `droitcapteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `identifiant`, `mdp`, `dateDEnaissance`, `telephone`, `mail`, `adresse`, `codepostal`, `ville`, `type`, `message`, `droitprofil`, `droitajoutlog`, `droitajoutcap`, `droitaction`, `droitphoto`, `droitauto`, `droitcapteur`) VALUES
(2, 'Administrateur', '', 'administrateur@isep.fr', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2017-05-01', '', 'adminisrateur@isep.fr', '', 0, '', 0, '', '', NULL, '', '', '', '', ''),
(6, 'andrieu', 'quentin', 'andrieuquentin@msn.com', 'mdp', '1996-10-30', '0630608268', 'andrieuquentin@msn.com', '55 rue des laboureurs', 77550, 'MOISSY', 1, '', '', NULL, '', '', '', '', ''),
(20, 'iribarne', 'manon', 'manon', 'mdp1', '2016-12-12', '0695612244', 'manon@iribarne.com', 'eee', 89785, 'paris', 1, '', 'on', 'on', 'on', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_logement`
--

CREATE TABLE `utilisateur_logement` (
  `idu` int(255) NOT NULL,
  `id_logement` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur_logement`
--

INSERT INTO `utilisateur_logement` (`idu`, `id_logement`, `id_utilisateur`) VALUES
(1, 48, 0),
(2, 48, 18),
(3, 0, 24),
(4, 0, 24),
(5, 49, 26),
(6, 48, 27);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `automatisations`
--
ALTER TABLE `automatisations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `capteuractionneur`
--
ALTER TABLE `capteuractionneur`
  ADD PRIMARY KEY (`numero de serie`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`idp`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur_logement`
--
ALTER TABLE `utilisateur_logement`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `automatisations`
--
ALTER TABLE `automatisations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `capteuractionneur`
--
ALTER TABLE `capteuractionneur`
  MODIFY `numero de serie` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2430;
--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `idp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `utilisateur_logement`
--
ALTER TABLE `utilisateur_logement`
  MODIFY `idu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
