INSERT INTO `account` (`account_id`, `user_id`, `account_name`, `balance`, `created_at`) VALUES
(1, 1, 'Savings Account', 1000.00, '2023-05-01 09:00:00'),
(2, 1, 'Checking Account', 500.00, '2023-05-05 14:30:00'),
(3, 2, 'Credit Card', -250.00, '2023-05-10 18:15:00'),
(4, 2, 'Investment Portfolio', 5000.00, '2023-05-15 11:45:00'),
(5, 3, 'Emergency Fund', 2000.00, '2023-05-20 13:00:00'),
(6, 3, 'Vacation Fund', 1000.00, '2023-05-25 16:30:00'),
(7, 4, 'Business Account', 1500.00, '2023-05-02 10:15:00'),
(8, 4, 'Personal Savings', 3000.00, '2023-05-07 12:45:00'),
(9, 5, 'College Fund', 5000.00, '2023-05-12 15:00:00'),
(10, 5, 'Retirement Account', 10000.00, '2023-05-18 17:30:00');



INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Travel'),
(2, 'Food'),
(3, 'Entertainment'),
(4, 'Shopping'),
(5, 'Healthcare'),
(6, 'Education'),
(7, 'Transportation'),
(8, 'Housing'),
(9, 'Utilities'),
(10, 'Miscellaneous');



INSERT INTO `accountbalance` (`account_balance_id`, `account_id`, `balance_date`, `balance_amount`)
VALUES
-- User 1
(1, 1, '2023-05-01', 1000.00),
(2, 1, '2023-05-02', 950.00),
(3, 1, '2023-05-03', 1050.00),
(4, 1, '2023-05-04', 900.00),
(5, 1, '2023-05-05', 1100.00),
-- User 2
(6, 2, '2023-05-01', 800.00),
(7, 2, '2023-05-02', 950.00),
(8, 2, '2023-05-03', 1050.00),
(9, 2, '2023-05-04', 900.00),
(10, 2, '2023-05-05', 1100.00),
-- User 3
(11, 3, '2023-05-01', 1200.00),
(12, 3, '2023-05-02', 950.00),
(13, 3, '2023-05-03', 1050.00),
(14, 3, '2023-05-04', 900.00),
(15, 3, '2023-05-05', 1100.00),
-- User 4
(16, 4, '2023-05-01', 1000.00),
(17, 4, '2023-05-02', 950.00),
(18, 4, '2023-05-03', 1050.00),
(19, 4, '2023-05-04', 900.00),
(20, 4, '2023-05-05', 1100.00),
-- User 5
(21, 5, '2023-05-01', 1000.00),
(22, 5, '2023-05-02', 950.00),
(23, 5, '2023-05-03', 1050.00),
(24, 5, '2023-05-04', 900.00),
(25, 5, '2023-05-05', 1100.00);


INSERT INTO `budget` (`budget_id`, `user_id`, `budget_name`, `amount`, `start_date`, `end_date`)
VALUES
-- User 1
(1, 1, 'Monthly Expenses', 1500.00, '2023-05-01', '2023-05-31'),
(2, 1, 'Travel Budget', 1000.00, '2023-06-01', '2023-06-30'),
(3, 1, 'Savings Plan', 500.00, '2023-05-01', '2023-12-31'),
(4, 1, 'Entertainment Budget', 300.00, '2023-05-01', '2023-05-31'),
(5, 1, 'Emergency Fund', 2000.00, '2023-01-01', '2023-12-31'),
-- User 2
(6, 2, 'Monthly Expenses', 1200.00, '2023-05-01', '2023-05-31'),
(7, 2, 'Travel Budget', 800.00, '2023-06-01', '2023-06-30'),
(8, 2, 'Savings Plan', 300.00, '2023-05-01', '2023-12-31'),
(9, 2, 'Entertainment Budget', 200.00, '2023-05-01', '2023-05-31'),
(10, 2, 'Emergency Fund', 1500.00, '2023-01-01', '2023-12-31'),
-- User 3
(11, 3, 'Monthly Expenses', 1800.00, '2023-05-01', '2023-05-31'),
(12, 3, 'Travel Budget', 1500.00, '2023-06-01', '2023-06-30'),
(13, 3, 'Savings Plan', 700.00, '2023-05-01', '2023-12-31'),
(14, 3, 'Entertainment Budget', 400.00, '2023-05-01', '2023-05-31'),
(15, 3, 'Emergency Fund', 2500.00, '2023-01-01', '2023-12-31'),
-- User 4
(16, 4, 'Monthly Expenses', 1600.00, '2023-05-01', '2023-05-31'),
(17, 4, 'Travel Budget', 1200.00, '2023-06-01', '2023-06-30'),
(18, 4, 'Savings Plan', 600.00, '2023-05-01', '2023-12-31'),
(19, 4, 'Entertainment Budget', 350.00, '2023-05-01', '2023-05-31'),
(20, 4, 'Emergency Fund', 1800.00, '2023-01-01', '2023-12-31'),
-- User 5
(21, 5, 'Monthly Expenses', 2000.00, '2023-05-01', '2023-05-31'),
(22, 5, 'Travel Budget', 1500.00, '2023-06-01', '2023-06-30'),
(23, 5, 'Savings Plan', 800.00, '2023-05-01', '2023-12-31'),
(24, 5, 'Entertainment Budget', 450.00, '2023-05-01', '2023-05-31'),
(25, 5, 'Emergency Fund', 2200.00, '2023-01-01', '2023-12-31');


INSERT INTO `budgetperiod` (`budget_period_id`, `budget_id`, `period_start_date`, `period_end_date`)
VALUES
-- User 1
(1, 1, '2023-05-01', '2023-05-31'),
(2, 2, '2023-06-01', '2023-06-30'),
(3, 3, '2023-05-01', '2023-12-31'),
(4, 4, '2023-05-01', '2023-05-31'),
(5, 5, '2023-01-01', '2023-12-31'),
-- User 2
(6, 6, '2023-05-01', '2023-05-31'),
(7, 7, '2023-06-01', '2023-06-30'),
(8, 8, '2023-05-01', '2023-12-31'),
(9, 9, '2023-05-01', '2023-05-31'),
(10, 10, '2023-01-01', '2023-12-31'),
-- User 3
(11, 11, '2023-05-01', '2023-05-31'),
(12, 12, '2023-06-01', '2023-06-30'),
(13, 13, '2023-05-01', '2023-12-31'),
(14, 14, '2023-05-01', '2023-05-31'),
(15, 15, '2023-01-01', '2023-12-31'),
-- User 4
(16, 16, '2023-05-01', '2023-05-31'),
(17, 17, '2023-06-01', '2023-06-30'),
(18, 18, '2023-05-01', '2023-12-31'),
(19, 19, '2023-05-01', '2023-05-31'),
(20, 20, '2023-01-01', '2023-12-31'),
-- User 5
(21, 21, '2023-05-01', '2023-05-31'),
(22, 22, '2023-06-01', '2023-06-30'),
(23, 23, '2023-05-01', '2023-12-31'),
(24, 24, '2023-05-01', '2023-05-31'),
(25, 25, '2023-01-01', '2023-12-31');

-- Custom Goals for User 1
INSERT INTO `customgoal` (`custom_goal_id`, `user_id`, `goal_description`, `target_amount`, `created_at`)
VALUES
(1, 1, 'Save for vacation', 5000.00, '2023-05-01 09:00:00'),
(2, 1, 'Pay off credit card debt', 2000.00, '2023-05-02 11:30:00'),
(3, 1, 'Buy a new car', 15000.00, '2023-05-03 14:45:00'),
(4, 1, 'Save for emergency fund', 10000.00, '2023-05-04 16:20:00'),
(5, 1, 'Start a small business', 5000.00, '2023-05-05 08:15:00');

-- Custom Goals for User 2
INSERT INTO `customgoal` (`custom_goal_id`, `user_id`, `goal_description`, `target_amount`, `created_at`)
VALUES
(6, 2, 'Save for down payment', 25000.00, '2023-05-01 10:30:00'),
(7, 2, 'Travel around the world', 10000.00, '2023-05-02 13:45:00'),
(8, 2, 'Start a college fund for children', 5000.00, '2023-05-03 15:30:00'),
(9, 2, 'Pay off student loans', 15000.00, '2023-05-04 17:45:00'),
(10, 2, 'Save for retirement', 50000.00, '2023-05-05 09:30:00');

INSERT INTO `customgoal` (`custom_goal_id`, `user_id`, `goal_description`, `target_amount`, `created_at`)
VALUES
(11, 3, 'Save for home renovation', 10000.00, '2023-05-01 09:00:00'),
(12, 3, 'Pay off car loan', 5000.00, '2023-05-02 11:30:00'),
(13, 3, 'Start an education fund', 8000.00, '2023-05-03 14:45:00'),
(14, 3, 'Save for a dream vacation', 15000.00, '2023-05-04 16:20:00'),
(15, 3, 'Invest in stocks', 5000.00, '2023-05-05 08:15:00');

INSERT INTO `customgoal` (`custom_goal_id`, `user_id`, `goal_description`, `target_amount`, `created_at`)
VALUES
(16, 4, 'Save for a new car', 15000.00, '2023-05-01 09:00:00'),
(17, 4, 'Pay off credit card debt', 8000.00, '2023-05-02 11:30:00'),
(18, 4, 'Start an emergency fund', 10000.00, '2023-05-03 14:45:00'),
(19, 4, 'Save for a down payment', 20000.00, '2023-05-04 16:20:00'),
(20, 4, 'Invest in real estate', 50000.00, '2023-05-05 08:15:00');

INSERT INTO `customgoal` (`custom_goal_id`, `user_id`, `goal_description`, `target_amount`, `created_at`)
VALUES
(21, 5, 'Save for a dream wedding', 20000.00, '2023-05-01 09:00:00'),
(22, 5, 'Pay off student loans', 15000.00, '2023-05-02 11:30:00'),
(23, 5, 'Start a retirement fund', 50000.00, '2023-05-03 14:45:00'),
(24, 5, 'Save for a vacation home', 100000.00, '2023-05-04 16:20:00'),
(25, 5, 'Invest in a business', 30000.00, '2023-05-05 08:15:00');


INSERT INTO `expense` (`expense_id`, `user_id`, `expense_category_id`, `expense_amount`, `expense_date`)
VALUES
(1, 1, 1, 50.00, '2023-05-01'),
(2, 1, 2, 75.00, '2023-05-02'),
(3, 1, 3, 120.00, '2023-05-03'),
(4, 1, 4, 80.00, '2023-05-04'),
(5, 1, 5, 65.00, '2023-05-05');

INSERT INTO `expense` (`expense_id`, `user_id`, `expense_category_id`, `expense_amount`, `expense_date`)
VALUES
(6, 2, 3, 50.00, '2023-05-01'),
(7, 2, 2, 75.00, '2023-05-02'),
(8, 2, 5, 120.00, '2023-05-03'),
(9, 2, 1, 80.00, '2023-05-04'),
(10, 2, 4, 65.00, '2023-05-05');

INSERT INTO `expense` (`expense_id`, `user_id`, `expense_category_id`, `expense_amount`, `expense_date`)
VALUES
(11, 3, 2, 50.00, '2023-05-01'),
(12, 3, 3, 75.00, '2023-05-02'),
(13, 3, 1, 120.00, '2023-05-03'),
(14, 3, 4, 80.00, '2023-05-04'),
(15, 3, 5, 65.00, '2023-05-05');

INSERT INTO `expense` (`expense_id`, `user_id`, `expense_category_id`, `expense_amount`, `expense_date`)
VALUES
(16, 4, 1, 50.00, '2023-05-01'),
(17, 4, 2, 75.00, '2023-05-02'),
(18, 4, 3, 120.00, '2023-05-03'),
(19, 4, 4, 80.00, '2023-05-04'),
(20, 4, 5, 65.00, '2023-05-05');

INSERT INTO `expense` (`expense_id`, `user_id`, `expense_category_id`, `expense_amount`, `expense_date`)
VALUES
(21, 5, 3, 50.00, '2023-05-01'),
(22, 5, 2, 75.00, '2023-05-02'),
(23, 5, 5, 120.00, '2023-05-03'),
(24, 5, 1, 80.00, '2023-05-04'),
(25, 5, 4, 65.00, '2023-05-05');

INSERT INTO `goalitem` (`goal_item_id`, `predefined_goal_id`, `goal_description`, `target_amount`)
VALUES
(1, 1, 'Save for Vacation', 5000.00),
(2, 2, 'Buy a New Car', 15000.00),
(3, 3, 'Pay off Credit Card Debt', 2000.00),
(4, 4, 'Save for Emergency Fund', 10000.00),
(5, 5, 'Invest in Stocks', 5000.00);

INSERT INTO `goalitem` (`goal_item_id`, `predefined_goal_id`, `goal_description`, `target_amount`)
VALUES
(6, 1, 'Save for Vacation', 7000.00),
(7, 3, 'Pay off Credit Card Debt', 3000.00),
(8, 5, 'Invest in Stocks', 8000.00),
(9, 2, 'Buy a New Car', 20000.00),
(10, 4, 'Save for Emergency Fund', 12000.00);

INSERT INTO `goalitem` (`goal_item_id`, `predefined_goal_id`, `goal_description`, `target_amount`)
VALUES
(11, 2, 'Buy a New Car', 18000.00),
(12, 1, 'Save for Vacation', 4000.00),
(13, 5, 'Invest in Stocks', 7000.00),
(14, 4, 'Save for Emergency Fund', 8000.00),
(15, 3, 'Pay off Credit Card Debt', 2500.00);

INSERT INTO `goalitem` (`goal_item_id`, `predefined_goal_id`, `goal_description`, `target_amount`)
VALUES
(16, 3, 'Pay off Credit Card Debt', 3500.00),
(17, 5, 'Invest in Stocks', 9000.00),
(18, 2, 'Buy a New Car', 22000.00),
(19, 4, 'Save for Emergency Fund', 15000.00),
(20, 1, 'Save for Vacation', 6000.00);

INSERT INTO `goalitem` (`goal_item_id`, `predefined_goal_id`, `goal_description`, `target_amount`)
VALUES
(21, 4, 'Save for Emergency Fund', 13000.00),
(22, 2, 'Buy a New Car', 25000.00),
(23, 1, 'Save for Vacation', 8000.00),
(24, 3, 'Pay off Credit Card Debt', 4000.00),
(25, 5, 'Invest in Stocks', 10000.00);


INSERT INTO `goaltype` (`goal_type_id`, `type_name`)
VALUES
(1, 'Travel'),
(2, 'Savings'),
(3, 'Education'),
(4, 'Health'),
(5, 'Career');

INSERT INTO `income` (`income_id`, `user_id`, `income_source`, `income_amount`, `income_date`)
VALUES
-- User 1
(1, 1, 'Salary', 5000.00, '2023-05-01'),
(2, 1, 'Bonus', 1000.00, '2023-05-15'),
(3, 1, 'Freelance', 800.00, '2023-05-20'),
(4, 1, 'Dividends', 250.00, '2023-05-25'),
(5, 1, 'Rent', 600.00, '2023-05-30'),

-- User 2
(6, 2, 'Salary', 4500.00, '2023-05-01'),
(7, 2, 'Bonus', 800.00, '2023-05-15'),
(8, 2, 'Part-time Job', 500.00, '2023-05-20'),
(9, 2, 'Investment Returns', 300.00, '2023-05-25'),
(10, 2, 'Side Business', 700.00, '2023-05-30'),

-- User 3
(11, 3, 'Salary', 4000.00, '2023-05-01'),
(12, 3, 'Bonus', 700.00, '2023-05-15'),
(13, 3, 'Consulting', 600.00, '2023-05-20'),
(14, 3, 'Interest Income', 150.00, '2023-05-25'),
(15, 3, 'Rental Income', 900.00, '2023-05-30'),

-- User 4
(16, 4, 'Salary', 5500.00, '2023-05-01'),
(17, 4, 'Bonus', 1200.00, '2023-05-15'),
(18, 4, 'Freelance', 900.00, '2023-05-20'),
(19, 4, 'Dividends', 350.00, '2023-05-25'),
(20, 4, 'Rent', 750.00, '2023-05-30'),

-- User 5
(21, 5, 'Salary', 4800.00, '2023-05-01'),
(22, 5, 'Bonus', 900.00, '2023-05-15'),
(23, 5, 'Part-time Job', 600.00, '2023-05-20'),
(24, 5, 'Investment Returns', 250.00, '2023-05-25'),
(25, 5, 'Side Business', 800.00, '2023-05-30');

INSERT INTO `investment` (`investment_id`, `user_id`, `investment_name`, `investment_amount`, `created_at`)
VALUES
-- User 1
(1, 1, 'Stocks', 5000.00, '2023-05-01 10:00:00'),
(2, 1, 'Mutual Funds', 2500.00, '2023-05-05 14:30:00'),
(3, 1, 'Real Estate', 10000.00, '2023-05-10 09:45:00'),
(4, 1, 'Bonds', 3000.00, '2023-05-15 16:20:00'),
(5, 1, 'Cryptocurrency', 2000.00, '2023-05-20 11:15:00'),

-- User 2
(6, 2, 'Stocks', 4000.00, '2023-05-01 09:30:00'),
(7, 2, 'Mutual Funds', 1500.00, '2023-05-05 11:45:00'),
(8, 2, 'Real Estate', 8000.00, '2023-05-10 15:00:00'),
(9, 2, 'Bonds', 2000.00, '2023-05-15 13:20:00'),
(10, 2, 'Cryptocurrency', 1500.00, '2023-05-20 10:30:00'),

-- User 3
(11, 3, 'Stocks', 3000.00, '2023-05-01 11:15:00'),
(12, 3, 'Mutual Funds', 1000.00, '2023-05-05 10:30:00'),
(13, 3, 'Real Estate', 7000.00, '2023-05-10 14:45:00'),
(14, 3, 'Bonds', 1500.00, '2023-05-15 12:10:00'),
(15, 3, 'Cryptocurrency', 1000.00, '2023-05-20 09:00:00'),

-- User 4
(16, 4, 'Stocks', 5500.00, '2023-05-01 12:30:00'),
(17, 4, 'Mutual Funds', 2000.00, '2023-05-05 15:45:00'),
(18, 4, 'Real Estate', 9000.00, '2023-05-10 11:00:00'),
(19, 4, 'Bonds', 2500.00, '2023-05-15 14:30:00'),
(20, 4, 'Cryptocurrency', 1800.00, '2023-05-20 10:45:00'),

-- User 5
(24, 5, 'Bonds', 2200.00, '2023-05-15 16:00:00'),
(25, 5, 'Cryptocurrency', 1600.00, '2023-05-20 13:30:00'),
(26, 5, 'Stocks', 5200.00, '2023-05-25 11:45:00'),
(27, 5, 'Mutual Funds', 1900.00, '2023-05-29 10:00:00'),
(28, 5, 'Real Estate', 8800.00, '2023-06-02 14:15:00');

-- Predefined goals for User 1
INSERT INTO `predefinedgoal` (`predefined_goal_id`, `goal_name`, `goal_type_id`, `created_at`)
VALUES
(1, 'Travel', 1, CURRENT_TIMESTAMP),
(2, 'Education', 2, CURRENT_TIMESTAMP),
(3, 'Home Purchase', 3, CURRENT_TIMESTAMP),
(4, 'Retirement', 4, CURRENT_TIMESTAMP),
(5, 'Emergency Fund', 5, CURRENT_TIMESTAMP);

-- Predefined goals for User 2
INSERT INTO `predefinedgoal` (`predefined_goal_id`, `goal_name`, `goal_type_id`, `created_at`)
VALUES
(6, 'Travel', 1, CURRENT_TIMESTAMP),
(7, 'Education', 2, CURRENT_TIMESTAMP),
(8, 'Home Purchase', 3, CURRENT_TIMESTAMP),
(9, 'Retirement', 4, CURRENT_TIMESTAMP),
(10, 'Emergency Fund', 5, CURRENT_TIMESTAMP);

-- Predefined goals for User 3
INSERT INTO `predefinedgoal` (`predefined_goal_id`, `goal_name`, `goal_type_id`, `created_at`)
VALUES
(11, 'Travel', 1, CURRENT_TIMESTAMP),
(12, 'Education', 2, CURRENT_TIMESTAMP),
(13, 'Home Purchase', 3, CURRENT_TIMESTAMP),
(14, 'Retirement', 4, CURRENT_TIMESTAMP),
(15, 'Emergency Fund', 5, CURRENT_TIMESTAMP);

-- Predefined goals for User 4
INSERT INTO `predefinedgoal` (`predefined_goal_id`, `goal_name`, `goal_type_id`, `created_at`)
VALUES
(16, 'Travel', 1, CURRENT_TIMESTAMP),
(17, 'Education', 2, CURRENT_TIMESTAMP),
(18, 'Home Purchase', 3, CURRENT_TIMESTAMP),
(19, 'Retirement', 4, CURRENT_TIMESTAMP),
(20, 'Emergency Fund', 5, CURRENT_TIMESTAMP);

-- Predefined goals for User 5
INSERT INTO `predefinedgoal` (`predefined_goal_id`, `goal_name`, `goal_type_id`, `created_at`)
VALUES
(21, 'Travel', 1, CURRENT_TIMESTAMP),
(22, 'Education', 2, CURRENT_TIMESTAMP),
(23, 'Home Purchase', 3, CURRENT_TIMESTAMP),
(24, 'Retirement', 4, CURRENT_TIMESTAMP),
(25, 'Emergency Fund', 5, CURRENT_TIMESTAMP);

INSERT INTO `savings` (`savings_id`, `user_id`, `savings_name`, `savings_amount`, `savings_date`)
VALUES
-- User 1
(1, 1, 'Emergency Fund', 1000.00, '2023-05-01'),
(2, 1, 'Vacation Savings', 1500.00, '2023-05-02'),
(3, 1, 'Retirement Fund', 2000.00, '2023-05-03'),
(4, 1, 'Education Fund', 2500.00, '2023-05-04'),
(5, 1, 'Home Renovation Savings', 3000.00, '2023-05-05'),

-- User 2
(6, 2, 'Travel Fund', 1200.00, '2023-05-01'),
(7, 2, 'Car Purchase Savings', 1800.00, '2023-05-02'),
(8, 2, 'Wedding Fund', 2200.00, '2023-05-03'),
(9, 2, 'Investment Savings', 2800.00, '2023-05-04'),
(10, 2, 'Emergency Fund', 3400.00, '2023-05-05'),

-- User 3
(11, 3, 'Home Down Payment', 800.00, '2023-05-01'),
(12, 3, 'Vacation Savings', 1200.00, '2023-05-02'),
(13, 3, 'Car Repair Fund', 1600.00, '2023-05-03'),
(14, 3, 'Education Savings', 2000.00, '2023-05-04'),
(15, 3, 'Emergency Fund', 2400.00, '2023-05-05'),

-- User 4
(16, 4, 'Retirement Fund', 1400.00, '2023-05-01'),
(17, 4, 'Home Renovation Savings', 1800.00, '2023-05-02'),
(18, 4, 'Travel Fund', 2200.00, '2023-05-03'),
(19, 4, 'Emergency Fund', 2600.00, '2023-05-04'),
(20, 4, 'Car Purchase Savings', 3000.00, '2023-05-05'),

-- User 5
(21, 5, 'Wedding Fund', 1000.00, '2023-05-01'),
(22, 5, 'Education Fund', 1400.00, '2023-05-02'),
(23, 5, 'Emergency Fund', 1800.00, '2023-05-03'),
(24, 5, 'Vacation Savings', 2200.00, '2023-05-04'),
(25, 5, 'Investment Savings', 2600.00, '2023-05-05');

INSERT INTO `transaction` (`transaction_id`, `user_id`, `budget_id`, `category_id`, `transaction_date`, `amount`)
VALUES
(1, 1, 4, 1, '2023-05-01', 50.00),
(2, 1, 10, 2, '2023-05-02', 25.00),
(3, 1, 13, 3, '2023-05-03', 75.00),
(4, 1, 6, 4, '2023-05-04', 40.00),
(5, 1, 22, 5, '2023-05-05', 60.00),
(6, 1, 1, 6, '2023-05-06', 30.00),
(7, 1, 17, 7, '2023-05-07', 55.00),
(8, 1, 9, 8, '2023-05-08', 20.00),
(9, 1, 8, 9, '2023-05-09', 45.00),
(10, 1, 3, 10, '2023-05-10', 65.00),
(11, 1, 5, 1, '2023-05-11', 35.00),
(12, 1, 14, 2, '2023-05-12', 30.00),
(13, 1, 11, 3, '2023-05-13', 50.00),
(14, 1, 19, 4, '2023-05-14', 40.00),
(15, 1, 2, 5, '2023-05-15', 55.00),
(16, 1, 7, 6, '2023-05-16', 25.00),
(17, 1, 12, 7, '2023-05-17', 60.00),
(18, 1, 24, 8, '2023-05-18', 20.00),
(19, 1, 21, 9, '2023-05-19', 45.00),
(20, 1, 15, 10, '2023-05-20', 70.00);

INSERT INTO `transaction` (`transaction_id`, `user_id`, `budget_id`, `category_id`, `transaction_date`, `amount`)
VALUES
(21, 2, 19, 1, '2023-05-01', 50.00),
(22, 2, 6, 2, '2023-05-02', 25.00),
(23, 2, 2, 3, '2023-05-03', 75.00),
(24, 2, 14, 4, '2023-05-04', 40.00),
(25, 2, 10, 5, '2023-05-05', 60.00),
(26, 2, 13, 6, '2023-05-06', 30.00),
(27, 2, 20, 7, '2023-05-07', 55.00),
(28, 2, 16, 8, '2023-05-08', 20.00),
(29, 2, 7, 9, '2023-05-09', 45.00),
(30, 2, 21, 10, '2023-05-10', 65.00),
(31, 2, 25, 1, '2023-05-11', 35.00),
(32, 2, 9, 2, '2023-05-12', 30.00),
(33, 2, 8, 3, '2023-05-13', 50.00),
(34, 2, 18, 4, '2023-05-14', 40.00),
(35, 2, 4, 5, '2023-05-15', 55.00),
(36, 2, 5, 6, '2023-05-16', 25.00),
(37, 2, 12, 7, '2023-05-17', 60.00),
(38, 2, 22, 8, '2023-05-18', 20.00),
(39, 2, 1, 9, '2023-05-19', 45.00),
(40, 2, 3, 10, '2023-05-20', 70.00);

INSERT INTO `transaction` (`transaction_id`, `user_id`, `budget_id`, `category_id`, `transaction_date`, `amount`)
VALUES
(41, 3, 14, 1, '2023-05-01', 100.00),
(42, 3, 21, 2, '2023-05-02', 50.00),
(43, 3, 11, 3, '2023-05-03', 150.00),
(44, 3, 3, 4, '2023-05-04', 80.00),
(45, 3, 6, 5, '2023-05-05', 120.00),
(46, 3, 25, 6, '2023-05-06', 60.00),
(47, 3, 20, 7, '2023-05-07', 110.00),
(48, 3, 12, 8, '2023-05-08', 40.00),
(49, 3, 19, 9, '2023-05-09', 90.00),
(50, 3, 23, 10, '2023-05-10', 130.00),
(51, 3, 8, 1, '2023-05-11', 70.00),
(52, 3, 22, 2, '2023-05-12', 60.00),
(53, 3, 4, 3, '2023-05-13', 100.00),
(54, 3, 1, 4, '2023-05-14', 80.00),
(55, 3, 18, 5, '2023-05-15', 110.00),
(56, 3, 15, 6, '2023-05-16', 50.00),
(57, 3, 10, 7, '2023-05-17', 120.00),
(58, 3, 24, 8, '2023-05-18', 40.00),
(59, 3, 9, 9, '2023-05-19', 90.00),
(60, 3, 7, 10, '2023-05-20', 140.00);

INSERT INTO `transaction` (`transaction_id`, `user_id`, `budget_id`, `category_id`, `transaction_date`, `amount`)
VALUES
(61, 4, 10, 1, '2023-05-01', 200.00),
(62, 4, 1, 2, '2023-05-02', 150.00),
(63, 4, 9, 3, '2023-05-03', 100.00),
(64, 4, 15, 4, '2023-05-04', 180.00),
(65, 4, 25, 5, '2023-05-05', 120.00),
(66, 4, 14, 6, '2023-05-06', 90.00),
(67, 4, 8, 7, '2023-05-07', 150.00),
(68, 4, 18, 8, '2023-05-08', 60.00),
(69, 4, 23, 9, '2023-05-09', 140.00),
(70, 4, 11, 10, '2023-05-10', 80.00),
(71, 4, 21, 1, '2023-05-11', 160.00),
(72, 4, 22, 2, '2023-05-12', 120.00),
(73, 4, 2, 3, '2023-05-13', 90.00),
(74, 4, 16, 4, '2023-05-14', 200.00),
(75, 4, 12, 5, '2023-05-15', 110.00),
(76, 4, 19, 6, '2023-05-16', 80.00),
(77, 4, 6, 7, '2023-05-17', 170.00),
(78, 4, 20, 8, '2023-05-18', 70.00),
(79, 4, 24, 9, '2023-05-19', 130.00),
(80, 4, 13, 10, '2023-05-20', 90.00);

INSERT INTO `transaction` (`transaction_id`, `user_id`, `budget_id`, `category_id`, `transaction_date`, `amount`)
VALUES
(81, 5, 18, 1, '2023-05-01', 150.00),
(82, 5, 17, 2, '2023-05-02', 120.00),
(83, 5, 15, 3, '2023-05-03', 80.00),
(84, 5, 6, 4, '2023-05-04', 190.00),
(85, 5, 13, 5, '2023-05-05', 100.00),
(86, 5, 11, 6, '2023-05-06', 70.00),
(87, 5, 23, 7, '2023-05-07', 130.00),
(88, 5, 24, 8, '2023-05-08', 50.00),
(89, 5, 9, 9, '2023-05-09', 120.00),
(90, 5, 2, 10, '2023-05-10', 200.00),
(91, 5, 19, 1, '2023-05-11', 90.00),
(92, 5, 7, 2, '2023-05-12', 80.00),
(93, 5, 3, 3, '2023-05-13', 140.00),
(94, 5, 21, 4, '2023-05-14', 170.00),
(95, 5, 8, 5, '2023-05-15', 110.00),
(96, 5, 16, 6, '2023-05-16', 60.00),
(97, 5, 22, 7, '2023-05-17', 150.00),
(98, 5, 1, 8, '2023-05-18', 40.00),
(99, 5, 4, 9, '2023-05-19', 100.00),
(100, 5, 14, 10, '2023-05-20', 120.00);


INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `created_at`)
VALUES
(1, 'user1', 'password1', 'user1@example.com', '2023-05-01 10:00:00'),
(2, 'user2', 'password2', 'user2@example.com', '2023-05-02 11:00:00'),
(3, 'user3', 'password3', 'user3@example.com', '2023-05-03 12:00:00'),
(4, 'user4', 'password4', 'user4@example.com', '2023-05-04 13:00:00'),
(5, 'user5', 'password5', 'user5@example.com', '2023-05-05 14:00:00');
