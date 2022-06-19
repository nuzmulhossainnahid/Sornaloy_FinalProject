-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 04:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sornaloy`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_requests`
--

CREATE TABLE `customer_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goldAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LoanAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_requests`
--

INSERT INTO `customer_requests` (`id`, `created_at`, `updated_at`, `userId`, `Name`, `nid`, `address`, `presentAddress`, `phone`, `email`, `goldAmount`, `LoanAmount`, `image`) VALUES
(1, '2022-05-24 22:38:24', '2022-05-24 22:38:24', '2', NULL, '1513121110', 'Salina Akter', 'vcccccccccc', '01717926261', 'hasan@gmail.com', 'dddd', 'ssssss', '202205250438acc.drawio (1).png'),
(2, '2022-05-25 09:22:54', '2022-05-25 09:22:54', '2', NULL, '1513121110', 'Salina Akter', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_appliers`
--

CREATE TABLE `loan_appliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nidNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofBirth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goldMeasure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goldType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loanAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_04_10_110455_create_sessions_table', 1),
(7, '2022_04_19_075326_create_sliders_table', 1),
(8, '2022_04_20_111905_create_loan_appliers_table', 1),
(9, '2022_04_20_164947_create_nid_tables_table', 1),
(10, '2022_05_01_061813_create_customer_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nid_tables`
--

CREATE TABLE `nid_tables` (
  `id` varchar(5) DEFAULT NULL,
  `created_at` varchar(10) DEFAULT NULL,
  `updated_at` varchar(10) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Fathers/HusbandName` varchar(255) DEFAULT NULL,
  `MothersName` varchar(255) DEFAULT NULL,
  `PresentAddress` varchar(255) DEFAULT NULL,
  `PermanentAddress` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(33) DEFAULT NULL,
  `emailAddress` varchar(33) DEFAULT NULL,
  `DateofBirth` varchar(12) DEFAULT NULL,
  `Occupation` varchar(25) DEFAULT NULL,
  `NIDNo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nid_tables`
--

INSERT INTO `nid_tables` (`id`, `created_at`, `updated_at`, `Name`, `Fathers/HusbandName`, `MothersName`, `PresentAddress`, `PermanentAddress`, `MobileNo`, `emailAddress`, `DateofBirth`, `Occupation`, `NIDNo`) VALUES
('1', '', '', 'Najmus Sakib', 'Late Siraj Uddin Ahmed', 'Salina Akter ', 'Building number - 08, Flat - 1506, Japan Garden City, Mohammadpur, Dhaka -1207', '14 Shahid Minar Road, Kalyanpur, Mirpur, Dhaka', '1676486741', 'n404sakib@gmail.com ', '10/9/1995', 'Business', '1513121110'),
('2', '', '', 'Tanjib Rubaiyat Khan', 'Mohammad Ali Khan', 'Bilkis Ahmed', '3/7 Ali and Noor Real Estate, Mohammadpur, Dhaka-1207', '3/7 Ali and Noor Real Estate, Mohammadpur, Dhaka-1207', '1624080815', 'tanjibeshan@gmail.com', '6/17/1995', 'Business', '1513121111'),
('3', '', '', 'Shaher Banu', 'Bazlur Rahman', 'Sufia Begum ', 'Rajendrapur Cantonment,Gazipur,Dhaka', 'Rajendrapur Cantonment,Gazipur,Dhaka', '1914044540', 'bshaher77@gmail.com', '12/10/1981', 'Service  Holder', '1513121112'),
('4', '', '', 'Azadur Rahman', 'Abdul Quddus Bhuiyan', 'Noor Jahan', '39/16/E, East Hazipara, Rampura, Dhaka', '39/16/E, East Hazipara, Rampura, Dhaka', '1797126134', 'cpazad@gmail.com', '10/1/1978', 'Business', '1513121113'),
('5', '', '', 'Sherin Akter', 'Abdul Quddus Bhuiyan', 'Noor Jahan', '39/16/E, East Hazipara, Rampura, Dhaka', '39/16/E, East Hazipara, Rampura, Dhaka', '1797126134', 'shirin1960s2gmail.com', '1/7/1973', 'Business', '1513121114'),
('6', '', '', 'Jahidur Rahman', 'Abdul Quddus Bhuiyan', 'Noor Jahan', '39/16/E, East Hazipara, Rampura, Dhaka', '39/16/E, East Hazipara, Rampura, Dhaka', '1726024130', 'zahirdur.73.rahman@gmail.com', '1/4/1973', 'Business', '1513121115'),
('7', '', '', 'Sadia Afrin', 'Abdul Quddus Bhuiyan', 'Noor Jahan', '39/16/E, East hazipara, Rampura, Dhaka', '39/16/E, East hazipara, Rampura, Dhaka', '1674914101', 'sadiashammi69@gmail.com', '4/6/1974', 'Business', '1513121116'),
('8', '', '', 'Shamsunnahar', 'Abdul Quddus Bhuiyan', 'Noor Jahan', '39/16/E, East Hazipara, Rampura, Dhaka', '39/16/E, East Hazipara, Rampura, Dhaka', '1682234092', 'sweetyireem123@gmail.com', '10/1/1978', 'Business', '1513121117'),
('9', '', '', 'Tahmina Akter', 'Abdul Quddus Bhuiyan', 'Noor Jahan', '39/16/E, East Hazipara, Rampura, Dhaka', '39/16/E, East Hazipara, Rampura, Dhaka', '1762043198', 'tasin.ahi@gmail.com', '1/4/1982', 'Business', '1513121118'),
('10', '', '', 'Mehedi Hasan Shuvo', 'Md. Abdul Mannan Khan', 'Momtaz Begum', 'Nadda para. dakshinkhan, dhaka', 'Vhelanagar, Narsingdi sodor, Narsingdi', '8.80E+12', 'shuvo199653@gmail.com', '10/1/1996', 'Business', '1513121119'),
('11', '', '', 'Ashik jaman', 'Md. Moniruzzaman', 'Hena Akter', 'house-317,Block-C,Road-12,Bashundhara R/A, Dhaka.', 'Aziz Plaza(3rd Floor),Victoriya Road,Tangail.', '1676459639', 'ashikjaman69@gmail.com', '3/9/1995', 'Business', '1513121120'),
('12', '', '', 'Fahim Rahman Rifat', 'Boktear Rahman', 'Hosneara Rahman Happy', 'Purbo Badda, Krishi Bank road 1884/85', 'Purbo Badda, Krishi Bank road 1884/85', '1764391943', 'myselffahim@yahoo.com', '3/14/1996', 'Business', '1513121121'),
('13', '', '', 'hasneen Chowdhury', 'Mozharul huq Chowdhury', 'Lutfun Nahar', '3rd floor, house 499, lane 9, DOHS baridhara, Cantonment,  Dhaka', '3rd floor, house 499, lane 9, DOHS baridhara, Cantonment,  Dhaka', '', 'hhasneenchowdhury@gmail.com ', '1/3/1987', 'Business', '1513121122'),
('14', '', '', 'Noshin Nawal', 'A.K.M. Hemayet Uddin', 'Nurun Nahar', '3rd floor, House no 141, Road 4/1, Merul badda, Anandanagar. Anadanagar school er kache.', '3rd floor, House no 141, Road 4/1, Merul badda, Anandanagar. Anadanagar school er kache.', '1719231230', 'noshin072@gmail ', '11/12/1989', 'Business', '1513121123'),
('15', '', '', 'Farhan Shakil Tahmid', 'Md. Serajul Islam', 'Akhter Jahan', 'B-86/F-01 Motijheel, A.G.B Colony Dhaka-1000', 'Vill- Sarkatia, PO- Bilkrishnapur, PS- Raninagar, Dist- Naogaon', '1675952204', 'farhan.tahmid@gmail.com', '4/7/1995', 'Service  Holder', '1513121124'),
('16', '', '', 'Mohammad Maruf Kabir', 'M. A. Matin Kabir', 'Maleka Parveen', 'B-89/F-7, A.G.B Colony, Motijheel, Dhaka -1000', 'Village: Khas ghuniPara, P.O: Salimabad, Thana: Nagarpur, Distric: Tangail - 1938', '1675120286', 'marufkabirabir@gmail.com', '12/26/1993', 'Service  Holder', '1513121125'),
('17', '', '', 'Md. Faysol Chisti Tahmid', 'Md. Shamsul Alam', 'Rojina Ferdous', '290/1/5, North Shahjahanpur, Dhaka, Bangladesh', 'Village: Jangalbari, Post Office: Fakirbazar, P.S.: Burichang, District: Cumilla.', '1682031509', 'foysaltahmid101@gmail.com', '1/18/1995', 'Business', '1513121126'),
('18', '', '', 'Abdullah Al Rafid', 'Md. Anwar Hossain ', 'Sabiha Begum ', 'B-74/G-7 A.G.B Colony Motijheel Dhaka 1000', 'Vill. Chakrampur, Po. Rampur, Ps. Trishal, Dist. Mymensingh.', '1670203438', 'Abdullahalrafid36@gmail.com', '2/27/1996', 'Unemployed ', '1513121127'),
('19', '', '', 'Sabbir Al Habib', 'ATM Habibur Rahman ', 'Samsun Nahar ', 'Will Notify Later', 'Will Notify Later', '1671907785', 'sabbiralhabib363@gmail.com', '11/27/1994', 'Service  Holder', '1513121128'),
('20', '', '', 'Sabbir Al Habib', 'ATM Habibur Rahman', 'Samsun Nahar', 'B-12, E-06, AGB Colony (Al-Helal Zone), Motijheel, Dhaka', 'Vill: Choto Ashulia, P/O: Dhamrai, P/S: Dhamrai, Dist: Dhaka', 'Already given', 'Already given', '11/27/1994', 'Service  Holder', '1513121129'),
('21', '', '', 'Imran Fahad', 'A.T.M. Nurul Islam', 'Mrs. Lutfun Nahar', 'House 10-12, Road 4, F Block, Level 5, Rampura Banasree, Dhaka 1219', 'Same', '1755882225', 'imranfahad1971@gmail.com', '11/14/1987', 'Business', '1513121130'),
('22', '', '', 'Sharmina Chowdhury', 'Md. Abul Kashem Chowdhury', 'Syeda Nasreen Akhter', 'Apt : C2, House 79, Road 8/A, Dhanmondi Dhaka', '17/A Percival Hill, College Road, Kotowali, Chattogram', '1716332256', 'info.prothompalok@gmail.com', '9/29/1979', 'Business', '1513121131'),
('23', '', '', 'Nadim Yousuf Khan', 'Golam Azam Khan', 'Afsary Khanam', '20/11, Mohammadia Housing Society, Mohammadpur, Dhaka', 'Vill: Singair, Thana: Singair, PO: Singair, District: Manikgonj', '1572220664', 'nykhan.93@gmail.com', '12/17/1995', 'Business', '1513121132'),
('24', '', '', 'Md Abbas Ali', 'Nur Mohammad Munsi', '', '', '', '', 'mdabbasali.singair@gmail.com', '1/5/1978', 'Business', '1513121133'),
('25', '', '', 'Arifur Rahman Biswas', 'Kofil Uddin Biswas', '', '', '', '', 'arifurrahmanbiswas2@gmail.com', '1/31/1978', 'Business', '1513121134'),
('26', '', '', 'KAZI MASUDUR RAHMAN', 'LATE KAZI NAZRUL ISLAM', 'SALEHA BEGUM', '185/8, WEST KAFRUL, TALTOLA, DHAKA', 'WEST NONDAN PUR, POST: BELFULIA, UPSA, KHULNA-9242', '1839212504', 'kazianik09@gmail.com', '5/1/1986', 'Business', '1513121135'),
('27', '', '', 'MD. MAHFUZUR RAHMAN', 'MD. HAFIZUR RAHMAN', 'MRS. MORIUM RAHMAN', '470/5/2, (WATER PUMP LINE) BHUIYAN NIBASH, WEST SHEWRAPARA, MIRPUR, DHAKA. ', 'VILLAGE: SHOSHIDHOR PUR, POST: TARAGUNIYA, P.S: DOULATPUR, DIS: KUSHTIA', '1534658223', 'mahfuzur.rahman1432@gmail.com', '1/1/1985', 'Business', '1513121136'),
('28', '', '', 'Hossain Al Farabi', 'Md. Delowar Hossain ', 'Anjuman Nigar', 'House 282, Road 1/A, Block B, Bashundhara Residential Area, Dhaka 1229', 'Village: Masumabad, Thana: Rupganj, District: Narayanganj ', '1711083014', 'farabi3014@gmail.com', '10/1/1990', 'Business', '1513121137'),
('29', '', '', 'Nasrin Khanam ', 'MD Mosharaf Hossain', 'Ferdous Ara Begum ', 'House:1/3, Block:G, Road:5, Banasree, Dhaka ', 'House: Maa Monjil, V: Sonagazi, D: Feni ', '1744591593', 'Bipu.life@gmail.com ', '1/7/1991', 'Business', '1513121138'),
('30', '', '', 'Arafatul Islam', 'Najrul Islam', 'Jesmin Akther ', 'T-82, Madhya Badda, South Side of Link Road, Gulshan-1, Badda, Dhaka 1212', 'Kashem Building , Patiya ,Govindharkil ,Chattogram Bangladesh ', '1790500443', 'akib96am@gmail.com', '6/5/1996', 'Business', '1513121139'),
('31', '', '', 'Nehreen salahuddin', 'Salahuddin Matin', 'Nighat Salahuddin ', 'Road 4A, House 45, Dhanmondi ', 'Road 10, House 1, Dhanmondi ', '1731061200', 'nehreen22@gmail.com', '1/22/1985', 'Service  Holder', '1513121140'),
('32', '', '', 'Zuhayr Reaz ', 'Mohammed Reaz Mobarak', 'Annie Reaz', 'House 258, Road 8, Block D, Bashundhara R/A,Dhaka.', 'House 258, Road 8, Block D, Bashundhara R/A', '1640738243', 'zuhayr.reaz@gmail.com', '7/16/1993', 'Business', '1513121141'),
('33', '', '', 'Khaled Akand', 'Habib Akand', 'Sultana Akand', '1/J, North Adabor, Mohammadpur, Dhaka - 1207 ', 'Holding No D3, Dargapara, Thana- Boalia, Rajshahi.', '8.80E+12', 'khaled@vfsoft.com', '1/31/1987', 'Business', '1513121142'),
('34', '', '', 'F.A.M Ferdous', 'Mojidul Alam', 'Ferdous Alam', 'Cha 100/3, North Badda, Dhaka', 'Village: Alampara, PO+Upazilla:Kurigram,District Kurigram.', '8.80E+12', 'ferdous@vfsoft.com', '5/3/1983', 'Business', '1513121143'),
('35', '', '', 'Ansarul Haque', 'Md. Abdul Haque', 'Rahat Jannat', 'House:07, Road: 04, Sector:12, Uttara , Dhaka 1230.', 'House:209, Pukur Par, North Mourail, Brahmanbaria Sadar, Brahmanbaria 3400.', '8.80E+12', 'shamimhaque19@gmail.com', '1/13/1993', 'Business', '1513121144'),
('36', '', '', 'Md. Danial Zaman', 'Md. Ashraf-uz-Zaman', 'Afsana Kasem', 'House:290/1, North Shahjahanpur, Shantinagar-1217, Motijheel, Dhaka South City Corporation, Dhaka', 'House:290/1, North Shahjahanpur, Shantinagar-1217, Motijheel, Dhaka South City Corporation, Dhaka', '8.80E+12', 'mythilhorn@gmail.com', '1/13/1989', 'Business', '1513121145'),
('37', '', '', 'Md. Tareq Sojol', 'Md. Nurul Huda', 'Tara Begum', 'Holding No: I-56, Uttar Bilashpur, Gazipur City Corporation, Gazipur Sadar, Gazipur, PO: 1700', 'Holding No: I-56, Uttar Bilashpur, Gazipur City Corporation, Gazipur Sadar, Gazipur, PO: 1700', '8.80E+12', 'tareq18fin.du@gmail.com', '6/14/1992', 'Service  Holder', '1513121146'),
('38', '', '', 'Omar Faruque Simanta', 'Md. Abdul Majid', 'Shamshun Nahar', '90 Kazi Alauddin Road, Nazira Bazar, Dhaka', 'As Avobe', '8.80E+12', 'omar@house71.agency', '10/30/2021', 'Business', '1513121147'),
('39', '', '', 'Mahdi Islam Subah', 'Rabiul Islam', 'Majeda Parvin', 'House 11, Road 8, Rupnagar Abashik, Mirpur, Dhaka 1216', '312, New Jurain, Alom Market', '8.80E+12', 'mahadishuvo1996@gmail.com', '12/29/1996', 'Business', '1513121148'),
('40', '', '', 'Md. Mehadi Hassan', 'Md. AZAD FAKIR', 'MST. Samima Akter', 'Anchor Aziz Garden, Prembagan, Dakkhinkhan, Dhaka - 1230', 'Anchor Aziz Garden, Prembagan, Dakkhinkhan, Dhaka - 1230', '1767398972', 'friendlyshopping.com.bd@gmail.com', '3/28/1996', 'Business, Service  Holder', '1513121149'),
('41', '', '', '????ݩ????ݩ??? ????????????????ݩ ????', '?ݦ?ݨ??υ???ݟ ????ݪ?????݅????? ????????݅????? ????', '?ݩ??????????ݟ ???????ݦ????????? ?ݪ??', 'Anchor Aziz Garden, Prembagan, Dakkhinkhan, Dhaka - 1230', 'Anchor Aziz Garden, Prembagan, Dakkhinkhan, Dhaka - 1230', '1.71E+13', 'ummakulsumkoni@gmail.com', '2/15/1986', 'Housewife', '1513121150'),
('42', '', '', 'Abdur Rauf Mohammad Muhi', 'Abu Moosa Minto', 'Rowshan Ara Begum', '35, Abdul Aziz Lane, Lalbagh Dhaka-1211', '35, Abdul Aziz Lane, Lalbagh Dhaka-1211', '8.80E+12', 'rauf@house71.agency', '1/24/1996', 'Business', '1513121151'),
('43', '', '', 'Jannatul Alam', 'Husband: Shah Shaifullah-AL-Zakerin', 'Shamima Sultana', 'House: 34/B, Flat: B5, Chanmiya housing, Road: 02, Mohammadpur, Dhaka', 'Mondol para, malotinaghar matir maszid len, Bogra Sadar, Bogura, PO : 5800,\nBangladesh', '1746106699', 'j.alam.luna@gmail.com', '12/6/1990', 'Business', '1513121152'),
('44', '', '', 'Imrul Hasan Arnab', 'Mohammed Younus', 'Rehana Yesmin', '27/A, Chayabithi, Bashabo, Sabujbagh Thana, Dhaka 1214', '27/A, Chayabithi, Bashabo, Sabujbagh Thana, Dhaka 1214', '1687424116', 'arnab@house71.agency', '11/4/1996', 'Business', '1513121153'),
('45', '', '', 'Md. Shakawat shagor', 'Md.Mukta Mia', 'Sajeda Begum', '481, Shewrapara, Shamim soroni, mirpur, dhaka', 'Kalikapur, Chupua, Chouddagram, Cumilla ', '1636442283', 'Shakawatshagor5872@gmail.com', '12/11/1998', 'Business', '1513121154'),
('46', '', '', 'H M Sabir Noor', 'S M Nurul Alam', 'Sufia Sultana', '7/D Shantibagh, Dhaka 1217', 'Village: Falia, District: Faridpur, Thana & Post office: Alfadanga', '1842074386', 'sbrnoor@gmail.com', '1/1/1995', 'Service  Holder', '1513121155'),
('47', '', '', 'Saif Ahmed', 'Abdus Sobhan', 'Shamim Sultana', '98/B Lake Circus, Kalabagan', '98/B Lake Circus, Kalabagan', '1737744496', 'saif@house71.agency', '7/16/1978', 'Business', '1513121156'),
('48', '', '', 'Md. Shakhauat Hossain Nahid', 'Md. Shafiq', 'Minara Begum', '44 no, azimpur Dhaka- 1205.', '44 no, azimpur Dhaka- 1205.', '01681429292. 01710074714', 'nahid2829@gmail.com', '9/28/1996', 'Service  Holder', '1513121157'),
('49', '', '', 'Seam Rahman', 'Mustafizur Rahman', '', '234, West Taltola, sher e bangla, Dhaka', '234, West Taltola, sher e bangla, Dhaka', '1793388262', 'Seam764@gmail.com', '3/13/1998', 'Business', '1513121158'),
('50', '', '', 'Zuhayer Anjum Prottoy', 'Md Saiful Islam', 'Rokshana Islam', '12/20 Road 2 Renessa Polash Garden Shamoly  Dhaka', 'Purbachar Kaizuri Shahzadpur Sirajganj', '1737600221', 'prottoyanjum@gmail.com', '3/15/1998', 'Business', '1513121159'),
('51', '', '', 'Injamul hasan likhon', 'Abdul khaleque ', 'Delo Ara khatun', 'House-26,Road-12,shekertek,adabar', 'Purbo char kaizury,shazadpur,shirajganj', '1723945390', 'Likhon990@gmail.com', '9/5/0095', 'Business', '1513121160'),
('52', '', '', 'S M Nayeem', 'Md. A. K. Azad', 'Moss. Nazmun Nahar', '19/10 Primary School Road, Shahi Mosjid Goli???Kallyanpur, Dhaka-1207', '19/10 Primary School Road, Shahi Mosjid Goli???Kallyanpur, Dhaka-1207', '1600019885', 'smnayeem716@gmail.com', '10/15/2003', 'Business', '1513121161'),
('53', '', '', 'Abu Nayeem Mohammad Tawhidur Rashid ', 'Md Harun-or-Rashid', 'Neelima Parvin', '823/1, Bella Vista, 8B, Baishbari Road, West Kazipara, Mirpur, Dhaka 1207', '823/1, Bella Vista, 8B, Baishbari Road, West Kazipara, Mirpur, Dhaka 1207', '8.80E+12', 'rashid.tawhid@gmail.com', '11/18/1984', 'Business', '1513121162'),
('54', '', '', 'Muhammad Fahim Shahriar', 'K. M. Baki Billah', 'Aleya Siddiqui', 'House 215, Road 2, Avenue 3, Mirpur DOHS, Pallabi, Dhaka, PO : 1216', 'House 215, Road 2, Avenue 3, Mirpur DOHS, Pallabi, Dhaka, PO : 1216', '1764474464', 'fahim.swapnil@gmail.com', '10/28/2000', 'Business, Service  Holder', '1513121163'),
('55', '', '', 'Raiyan Rumman', 'Md Abul Kashem', 'Kamrunnahar Ruma', '1/A, Road 7, Mohammadi Housing Limited, Mohammadpur, Dhaka 1207', 'B-363, Borobari Road, Ward 2, Mizmizi Pashchim Para, Shiddhirganj, Narayanganj', '1747284496', 'rumman800@gmail.com', '11/11/1995', 'Business, Service  Holder', '1513121164'),
('56', '', '', 'Taufiq Hasan Al Banna', 'Choudhury Mahmood Hasan', 'Nasima Hasan', 'Flat#D4, House 49, Road 15A, Dhanmondi, Dhaka', 'Flat#D4, House 49, Road 15A, Dhanmondi, Dhaka', '1817579844', 'taufiq.hasan@gmail.com', '6/1/1982', 'Service  Holder', '1513121165'),
('57', '', '', 'M S Hasan Shahriar', 'Md. Giash Uddin', 'Sharifa Begum', '39 Purana Paltan (4th Floor), Dhaka 1000', '1/1/G/3-A North Jatrabari, Dhaka 1204', '1713368856', 'hasan@pixelnettech.com', '7/24/1985', 'Business', '1513121166'),
('58', '', '', 'Moinul Islam Khan', 'Mohammed Abdul Khaleque Khan', 'Salma Sultana', '30/5 A South Jatrabari,Dhaka 1204', 'same', '8.80E+12', 'moin3rd@gmail.com', '6/7/1988', 'Social Worker', '1513121167'),
('59', '', '', 'Raisul Kabir', 'M A Latif', 'Kohinoor Begum', 'Flat A7, Ja-172, Wirelessgate, Mohakhali, Dhaka, 1212', 'Khairabad, Bakerganj, Barisal ', '8.80E+12', 'raisulk@gmail.com', '9/23/1983', 'Service  Holder', '1513121168'),
('60', '', '', 'MD. Abid Shahriar Khan', 'Md. Monsur Rahman Khan', 'Rebeka Khan ', 'House# 1053(1st Floor), Road # 06, Avenue# 08, Mirpur DOHS, Pallabi, Dhaka, PO :\n1216', 'Shibpur (Khan Para), Gopalpur, Lalpur., Lalpur, Natore, PO : 6420, Bangladesh', '1715175403', 'abid0814@gmail.com', '8/14/1981', 'Business', '1513121169'),
('61', '', '', 'Mudasser Khayer', 'Kharul Islam', 'Mastara Begum', 'House # 8, Road #2, Block #C, Section #6, Mirpur, Dhaka, Po 1216.', 'Vill: Laxmipur, PO: Dakra, Thana : Charghat, District: Rajshahi, PO 6270.', '1914168989', 'khayer45@gmail.com', '12/10/1984', 'Business', '1513121170'),
('62', '', '', 'Md. Sultanul Arefin', 'Jainul Ahasan', 'Hosne Ara Najrin', 'Vill: Khetur, P.O: Premtali , P.S: Godagari, District: Rajshahi 6291, Rajshahi.', 'Vill: Khetur, P.O: Premtali , P.S: Godagari, District: Rajshahi 6291, Rajshahi.', '1717905033', 'md.sultanularefin@gmail.com', '10/3/1986', 'Business', '1513121171'),
('63', '', '', 'Md. Shaon Rahman', 'Late Dr. Sazedur Rahman', 'Nazma Rahman', 'House : 329, Sector : 2, Upshohor Housing Estate, Boalia , Rajshahi-6202. Rajshahi.', 'House : 329, Sector : 2, Upshohor Housing Estate, Boalia , Rajshahi-6202. Rajshahi.', '1712526360', 'shaonrahman1985@gmail.com', '8/11/1986', 'Business', '1513121172'),
('64', '', '', 'Anas Afridi Arnab', 'Md. Julfiquar Ali', 'Gulshan Ara Begum', 'Middle Badda Alatunnesa School Road, pa-55, Dhaka', 'Joypurhat Sadar, Joypurhat', '1775999842', 'afridiarnab@gmail.com', '12/1/1999', 'Business', '1513121173'),
('65', '', '', 'Md. Nishadul Islam', 'Md. Sirazul Islam', 'Nurunnahar Begum', '650/44/47, Kabi Jibon Ananda Das Sarak, Bogura Alekanda, Barisal.', '650/44/47, Kabi Jibon Ananda Das Sarak, Bogura Alekanda, Barisal.', '1631223070', 'inishadul1612@gmail.com', '12/16/1998', 'Business', '1513121174'),
('66', '', '', 'Anas Afridi Arnab', 'Md. Julfiquar Ali', 'Gulshan Ara Begum', 'Joypurhat, Joypurhat Sadar, Joypurhat', 'Joypurhat, Joypurhat Sadar, Joypurhat', '1775999842', 'afridiarnab@gmail.com', '12/1/1999', 'Business', '1513121175'),
('67', '', '', 'A. K. M. Ashek Farabi', 'Ashraf Ali', 'Mosa. Farida Begum', 'N.A.D-10, Ganabhaban Officer\'s Quarter, Sher-E-Bangla Nagar, Dhaka- 1207', '366, Khulipara, post office: Ghoramara-6100, Boalia, Rajshahi City Corporation, Rajshahi', '1911144646', 'ashekfarabi@gmail.com', '1/8/1993', 'Business', '1513121176'),
('68', '', '', 'SOUMIC SHEKHAR', 'LATE. DR. SUDHANGSHU SHEKHAR GACHI', 'SWAPNA DAS', 'House: 37, Road: 04, Sector: 10, Uttara, Dhaka', 'House:50, Road: 11, Sector: 6, Uttara, Dhaka', '1758444378', 'soumicshekhar@gmail.com', '4/9/1997', 'Business', '1513121177'),
('69', '', '', 'K. M. Rahat', 'Md Lutfor Rahaman Khan', 'Fatema Yesmin', 'House- 29, Road- 7/D, Sector- 09, Uttara, Dhaka', 'Library Bazar, Pabna Sadar, Pabna Sadar 6600, Pabna', '1722188167', 'k.m.rahat@gmail.com', '7/19/1997', 'Business', '1513121178'),
('70', '', '', 'MD RAKIBUL HAQUE AMIL', 'A K M KHASRU', 'FATEMA BEGUM', '37 BARDHANBARI ROAD, MIRPUR, DHAKA-1216', '237/C,LALKUTHI,MIRPUR,DHAKA-1216', '1947172492', 'haqueamil83@gmail.com', '10/31/1987', 'Business', '1513121179'),
('71', '', '', 'Nuzhat Nabila', 'Dr. Eunuse Akon ', 'Shahnaz Parveen', 'Flat-i10, Building 11, Doyel Tower, Lalmatia new colony, Dhaka.', 'Gorachand Das Road, Barisal.', '1717215248', 'nuzhatnabila07@gmail.com', '11/29/1990', 'Business, Service  Holder', '1513121180'),
('72', '', '', 'Anindita Anindita RoyRoy', 'Sudhabindu Roy', 'Archana Roy', 'Grand Terrace Apartment, D - 1204, 45 New Eskaton, Dhaka ', 'Same', '+44(0)7404345066 / +8801711937767', 'aninditaroydmc57@gmail.com', '10/8/1982', 'Service  Holder', '1513121181'),
('73', '', '', 'Palama Ahmed', 'Sultan Ahmed(Father)', 'Asma Rahman', 'House 3, Road 9, Sector 6, Uttara,Dhaka-1230', 'House 3, Road 9, Sector 6, Uttara, Dhaka-1230', '1670075648', 'ahmedpalama.vini@gmail.com', '8/8/1992', 'Freelance Content Writer', '1513121182'),
('74', '', '', 'Asma Rahman', 'Sultan Ahmed', 'Halima Akhter', 'House 3,Road 9,Sector 6 Uttara, Dhaka-1230', 'House 3,Road 9,Sector 6 Uttara, Dhaka-1230', '8.80E+12', 'asma.rahman2021@gmail.com', '4/14/1963', 'Service  Holder', '1513121183'),
('75', '', '', 'Khalid Farhan', 'Shahidul Haque', 'Farzana Huque', '32, Lake Circus, Kalabagan, Ena Kingdom, Claudius B8, Dhaka 1205', '32, Lake Circus, Kalabagan, Ena Kingdom, Claudius B8, Dhaka 1205', '1670049138', 'khalid@khalidfarhan.com', '6/27/1995', 'Business', '1513121184'),
('76', '', '', 'Md. Abdur Rahman Patwary ', 'Abdul Mannan Patwary ', 'Shahida Begum', 'D.K Villa. 57, Kutubkhali, Dania, Dhaka-1236', 'M.S. Manzil, Matlabganj, Matlab Dakshin, Matlab, Chandpur.', '1301050595', 'Patwary2743@gmail.com', '4/18/1990', 'Service  Holder', '1513121185'),
('77', '', '', 'Md. Solaiman Patwary', 'Abdul Mannan Patwary', 'Sahida Begum', 'DK Villa,Flat-4B,57 kutubkhali,Dhonia,Jatrabari,Dhaka-1236', 'MS Monzil,490/1 ,Nabakalash,Matlab(south),Chandpur-3640', '1916833524', 'umlsolaiman@gmail.com', '10/1/1988', 'Service  Holder', '1513121186'),
('78', '', '', 'MD. SADRUL AMIN', 'MD. ABDUL LATIF', 'MST. RAWSHAN ARA BEGUM', 'HOLDING#14, LAXMIPUR DINGADOBA, POST- G.P.O-6000, POLICE STATION- RAJPARA, DIST- RAJSHAHI.', 'HOLDING#14, LAXMIPUR DINGADOBA, POST- G.P.O-6000, POLICE STATION- RAJPARA, DIST- RAJSHAHI.', '8.80E+12', 'sadrul2013@gmail.com', '8/16/1990', 'Service  Holder', '1513121187'),
('79', '', '', 'MD. Rubel Miah', 'MD. Alarm miah', 'Bhanu Begum', 'Mirpur 2', 'Gazutia,konora, nagarpur tangail', '1861706099', 'ownshop2022@gmail.com', '8/5/1995', 'Business', '1513121188'),
('80', '', '', 'Shayekh Sakif', 'Md. Abdur Razzaque', 'Sanjida Yeasmin', '273/3/GA, West Agargaon, Sher-E-Bangla Nagar, Dhaka-1217., Rd Number 4, Dhaka 1217', 'Vill: Char Hamjani, P.O: Potal, P.S: Kalihati, Dist: Tangail', '1942537604', 'sakif@cuebites.com', '7/22/2000', 'Business', '1513121189'),
('81', '', '', 'Md Abu Hasnat', 'Abdul Mannan', 'Hamida Akter', 'House# 7/2/C, BDDL Shyamolima, Building:2, Flat-C1, Garden Street, Ring Road, Shyamoli, Dhaka-1207, Bangladesh.', 'Holding No: 112, Village: Pannara(Dakkhin Para), Union: 9 No Konkapoit, P.O-Dhorkora, P.S- Chauddagram, Comilla-3600, Banglades', '1681353253', 'hasnat.marketing@gmail.com', '4/8/1990', 'Business', '1513121190'),
('82', '', '', 'Sabian Ishtiak', 'Malik Ishtiak', 'Shaheen Ishtiak', 'Toma Palace, Flat No. 4D, 25/D Shukrabad, Dhaka- 1207 ', 'Toma Palace, Flat No. 4D, 25/D Shukrabad, Dhaka- 1207 ', '1673414754', 'sabian@cuebites.com', '11/26/1999', 'Business', '1513121191'),
('83', '', '', 'Hasnain Nur Sezan', 'Md. Abdul Mannan', 'Nurunnahar Haque', '55/A, Aziz Palace, Shidheshwary lane, Dhaka', 'Vill: Madarpur, Post; Balia, Upazilla: Dhamrai, District: Dhaka', '1517929234', 'hasnainsezan@gmail.com', '11/25/1999', 'Student', '1513121192'),
('84', '', '', 'Masrur Mohammad Shihabuddin', 'A N M Motasim Billah', 'Lutfunnesa Nazma', '12/6 Kabi Jashim Uddin Road, Kamalapur, Dhaka', 'Vill: Mithanala, Post; Sufia, Upazilla: Mirsharai, District: Chattogram', '1751955580', 'masrurshihab@gmail.com', '9/30/2000', 'Student', '1513121193'),
('85', '', '', 'Mohammad Tanvir Rahman', 'Md. Wahidur Rahman', 'Sarmena Nasir', '103, Shantinagar, Dhaka ', '1542, Daulatgonj Bazar, Laksam, Cumilla', '1711180155', 'tanvirrafi163@gmail.com', '9/3/1999', 'Student', '1513121194'),
('86', '', '', 'Sadman Morshed', 'Late Morshed Ali', 'Umme Kulsum Lucky', '06, Segunbagicha, Eastern Villa, Flat 803, Dhaka ', '06, Segunbagicha, Eastern Villa, Flat 803, Dhaka ', '1840402081', 'sadman.morshed95@gmail.com', '12/25/1998', 'Student', '1513121195'),
('87', '', '', 'Farzana Afrin Tisha', 'Nafis Alam', 'Rasheda Khanam', 'Uttara Sector 3 House 38 Road 20, Dhaka -1230', 'Olive Kunja, Ja 44/A, Gulshan Badda Link Road, Dhaka-1212', '1726542885', 'tishaofficial21@gmail.com', '6/30/1992', 'Service  Holder', '1513121196'),
('88', '', '', 'Nafis Alam', 'Late Shahidul Alam Sarkar', 'Mustari Jabeen', 'House 38, Road 20, Sector 03, Uttara, Dhaka-1230', 'village- goalmathan, post office Rajapara, Police Station- Cumilla Sadar South, Cumilla', '8.80E+12', 'alamnafis8@gmail.com', '9/25/1992', 'Service  Holder', '1513121197'),
('89', '', '', 'Ashikur Rahman Khan', 'Mizanur Rahman Khan', 'Selina Mizan', '63/4-5 (Flat#C2), Katasure (Sher-E-Bangla Road), Mohammadpur, Dhaka-1207', 'Vill: Charigram, P.O: Singair, P.S: Singair, District: Manikgang', '1711083484', 'ashik2055@gmail.com', '9/19/1993', 'Service  Holder', '1513121198'),
('90', '', '', 'Kazi Waseef Mohammad', 'Kazi Sher Mohammad', 'Dr Anjuman Ara', '2/H/1, Road 1, Shyamoli, PO Mohammadpur - 1207, Dhaka, Bangladesh', '2/H/1, Road 1, Shyamoli, PO Mohammadpur - 1207, Dhaka, Bangladesh', '8.80E+12', 'kaziwaseef@gmail.com', '2/18/1996', 'Service  Holder', '1513121199'),
('91', '', '', 'MD.ABDUR RAHMAN', 'MD.MOTIUR RAHMAN', 'MST.KOHINUR BEGUM', 'H-680/1/A, R-Gubtola, PS- Ramna, PO- Shantinagar, DIS- Dhaka.', 'VILL- Mothor Para, PS- Shaghata, PO- Ullah Sonatola, DIS- Gaibandha.', '1772013636', 'opensky.info247@gmail.com', '8/5/1994', 'Business', '1513121200'),
('92', '', '', 'MD.NURUL ALAM', 'MD.SAGOR UDDIN', 'NOBIRUNNESSA', 'H-JA-58/2, Badda, PS-Gulshan, DIS- Dhaka.', 'VILL- Gashbari, PS-Pancagor  PO- Satmegh, DIS- Pancagor', '1622681879', 'mdnurula879@gmail.com', '2/3/1977', 'Business', '1513121201'),
('93', '', '', 'Saria Tasneem Ahmed', 'Zayn Ahmed', 'Shahanara Shapna', 'Flat B5, 5/10 block C, Lalmatia, Asset Fairmont', 'House 80, road 2, Banani', '1730429738', 'sariaahmed@gmail.com', '1/12/1987', 'Business', '1513121202'),
('94', '', '', 'MD RAKIBUL HAQUE AMIL', 'A K M KHASRU', 'FATEMA BEGUM', '37 BARDHANBARI ROAD, MIRPUR, DHAKA-1216', '237/C,LALKUTHI,MIRPUR,DHAKA-1216', '1947172492', 'haqueamil83@gmail.com', '10/31/1987', 'Business', '1513121203');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8XB935t96mAMnmCIeicmE0hTjlCOmYlpRFi4dVG4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieHNDZ0lKbGJmNDFrRkJ1MURzZTN3ZEExRmdON0w3NzJBZkZ4NUpKdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zbGlkZXJfdmlldyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1653911232),
('AARhh2Xuor6LZyZErIX4tzcKMAxQFDdjnZRDBn1x', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmFGd0VjOGUyYWdEUTNDQnRZWDd6Y1ZZNndYQWRSTEZ2V051SXMxVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1654345229),
('AprvaGfOi6wEbuznQNB2Mfq3e5eEkgtmMo2Yjvya', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibnFOUFZjVVB1cENIQVFEbFlySFBYemZCWFlPV2FxWG5wQkJvYjIweiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcHBseV9sb2FuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1653453504),
('k69YjWZjgcp5Jpd6L3LMeh4OiMKqth4g2S27gX7Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFZsRDdjamE1c2dkb251OThsV1Fya0lkSVpwcGdyYWhOYzB2RUVIaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1653492344);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sliderTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sliderText` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sliderBtn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btncolor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `address`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `usertype`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '01717926261', 'Mohammadpur', '$2y$10$Ns4.bU8UIIs55hlDoFgmR.eLZhNpUGic4pSp5MizGSm5QxI0abYpy', NULL, NULL, NULL, '1', NULL, NULL, NULL, '2022-05-24 08:29:58', '2022-05-24 08:29:58'),
(2, 'User', 'user@gmail.com', NULL, '01717926261', 'Mohammadpur', '$2y$10$mka2hqbVRwuKO7YtiuyQM.FwWggANWQ1eu5ZrvIvm9bLO1aMb1cey', NULL, NULL, NULL, '0', NULL, NULL, NULL, '2022-05-24 08:30:27', '2022-05-24 08:30:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_requests`
--
ALTER TABLE `customer_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loan_appliers`
--
ALTER TABLE `loan_appliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_requests`
--
ALTER TABLE `customer_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_appliers`
--
ALTER TABLE `loan_appliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
