-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 26 Μάη 2023 στις 18:47:56
-- Έκδοση διακομιστή: 10.4.28-MariaDB
-- Έκδοση PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `piggy_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `accountbalance`
--

CREATE TABLE `accountbalance` (
  `account_balance_id` int(11) NOT NULL,
  `account_id` int(11) DEFAULT NULL,
  `balance_date` date DEFAULT NULL,
  `balance_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `budget`
--

CREATE TABLE `budget` (
  `budget_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `budget_name` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `budgetperiod`
--

CREATE TABLE `budgetperiod` (
  `budget_period_id` int(11) NOT NULL,
  `budget_id` int(11) DEFAULT NULL,
  `period_start_date` date DEFAULT NULL,
  `period_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customgoal`
--

CREATE TABLE `customgoal` (
  `custom_goal_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `goal_description` text DEFAULT NULL,
  `target_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `expense_category_id` int(11) DEFAULT NULL,
  `expense_amount` decimal(10,2) DEFAULT NULL,
  `expense_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `goalitem`
--

CREATE TABLE `goalitem` (
  `goal_item_id` int(11) NOT NULL,
  `predefined_goal_id` int(11) DEFAULT NULL,
  `goal_description` text DEFAULT NULL,
  `target_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `goaltype`
--

CREATE TABLE `goaltype` (
  `goal_type_id` int(11) NOT NULL,
  `type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `income`
--

CREATE TABLE `income` (
  `income_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `income_source` varchar(255) DEFAULT NULL,
  `income_amount` decimal(10,2) DEFAULT NULL,
  `income_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `investment`
--

CREATE TABLE `investment` (
  `investment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `investment_name` varchar(255) DEFAULT NULL,
  `investment_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `predefinedgoal`
--

CREATE TABLE `predefinedgoal` (
  `predefined_goal_id` int(11) NOT NULL,
  `goal_name` varchar(255) DEFAULT NULL,
  `goal_type_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `savings`
--

CREATE TABLE `savings` (
  `savings_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `savings_name` varchar(255) DEFAULT NULL,
  `savings_amount` decimal(10,2) DEFAULT NULL,
  `savings_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `budget_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `transaction_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Ευρετήρια για πίνακα `accountbalance`
--
ALTER TABLE `accountbalance`
  ADD PRIMARY KEY (`account_balance_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Ευρετήρια για πίνακα `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budget_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Ευρετήρια για πίνακα `budgetperiod`
--
ALTER TABLE `budgetperiod`
  ADD PRIMARY KEY (`budget_period_id`),
  ADD KEY `budget_id` (`budget_id`);

--
-- Ευρετήρια για πίνακα `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Ευρετήρια για πίνακα `customgoal`
--
ALTER TABLE `customgoal`
  ADD PRIMARY KEY (`custom_goal_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Ευρετήρια για πίνακα `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `expense_category_id` (`expense_category_id`);

--
-- Ευρετήρια για πίνακα `goalitem`
--
ALTER TABLE `goalitem`
  ADD PRIMARY KEY (`goal_item_id`),
  ADD KEY `predefined_goal_id` (`predefined_goal_id`);

--
-- Ευρετήρια για πίνακα `goaltype`
--
ALTER TABLE `goaltype`
  ADD PRIMARY KEY (`goal_type_id`);

--
-- Ευρετήρια για πίνακα `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Ευρετήρια για πίνακα `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`investment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Ευρετήρια για πίνακα `predefinedgoal`
--
ALTER TABLE `predefinedgoal`
  ADD PRIMARY KEY (`predefined_goal_id`),
  ADD KEY `goal_type_id` (`goal_type_id`);

--
-- Ευρετήρια για πίνακα `savings`
--
ALTER TABLE `savings`
  ADD PRIMARY KEY (`savings_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Ευρετήρια για πίνακα `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `budget_id` (`budget_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Περιορισμοί για πίνακα `accountbalance`
--
ALTER TABLE `accountbalance`
  ADD CONSTRAINT `accountbalance_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Περιορισμοί για πίνακα `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Περιορισμοί για πίνακα `budgetperiod`
--
ALTER TABLE `budgetperiod`
  ADD CONSTRAINT `budgetperiod_ibfk_1` FOREIGN KEY (`budget_id`) REFERENCES `budget` (`budget_id`);

--
-- Περιορισμοί για πίνακα `customgoal`
--
ALTER TABLE `customgoal`
  ADD CONSTRAINT `customgoal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Περιορισμοί για πίνακα `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `expense_ibfk_2` FOREIGN KEY (`expense_category_id`) REFERENCES `category` (`category_id`);

--
-- Περιορισμοί για πίνακα `goalitem`
--
ALTER TABLE `goalitem`
  ADD CONSTRAINT `goalitem_ibfk_1` FOREIGN KEY (`predefined_goal_id`) REFERENCES `predefinedgoal` (`predefined_goal_id`);

--
-- Περιορισμοί για πίνακα `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Περιορισμοί για πίνακα `investment`
--
ALTER TABLE `investment`
  ADD CONSTRAINT `investment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Περιορισμοί για πίνακα `predefinedgoal`
--
ALTER TABLE `predefinedgoal`
  ADD CONSTRAINT `predefinedgoal_ibfk_1` FOREIGN KEY (`goal_type_id`) REFERENCES `goaltype` (`goal_type_id`);

--
-- Περιορισμοί για πίνακα `savings`
--
ALTER TABLE `savings`
  ADD CONSTRAINT `savings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Περιορισμοί για πίνακα `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`budget_id`) REFERENCES `budget` (`budget_id`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
