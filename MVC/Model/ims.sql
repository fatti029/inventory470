START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `edith`
--

CREATE TABLE `edith` (
  `name` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `oval` varchar(50) NOT NULL,
  `nval` varchar(50) NOT NULL,
  `edituser` varchar(50) NOT NULL,
  `edate` date NOT NULL,
  `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edith`
--

INSERT INTO `edith` (`name`, `manufacturer`, `oval`, `nval`, `edituser`, `edate`, `etime`) VALUES
('Frenxit', 'Beximco', '20', '5', '1', '2022-03-29', '16:54:08'),
('Frenxit', 'Beximco', '50', '25', '1', '2022-03-29', '16:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `name` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `uprice` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`name`, `manufacturer`, `category`, `uprice`, `quantity`) VALUES
('Frenxit', 'Beximco', 'Antidepressant', 5, 25),
('Entacyd', 'Square', 'Antacid', 70, 15),
('Napa', 'Square', 'Paracetamoml', 0.8, 50),
('Mkast', 'Incepta', 'Leukotriene', 13, 25),
('Brexi', 'Eskayef', 'Benzodiazepine', 15, 100);

-- --------------------------------------------------------

--
-- Table structure for table `orderh`
--

CREATE TABLE `orderh` (
  `name` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `uprice` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `odate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderh`
--

INSERT INTO `orderh` (`name`, `manufacturer`, `category`, `uprice`, `quantity`, `price`, `odate`) VALUES
('Frenxit', 'Beximco', 'Antidepressant', 5, 50, 250, '2022-03-29'),
('Entacyd', 'Square', 'Antacid', 70, 15, 1050, '2023-03-29'),
('Napa', 'Square', 'Paracetamoml', 0.8, 50, 40, '2022-03-31'),
('Mkast', 'Incepta', 'Leukotriene', 13, 25, 325, '2021-11-02'),
('Brexi', 'Eskayef', 'Benzodiazepine', 15, 100, 1500, '2021-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'monkas@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
