--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
  `category` varchar(255) NOT NULL
  `average_rating` float(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'product1', '3DcAM01', 'product-images/b1.jpg', 1500.00),
(2, 'product2', 'USB02', 'product-images/b2.jpg', 800.00),
(3, 'product3', 'wristWear03', 'product-images/b3.jpg', 300.00),
(4, 'product4', 'LPN45', 'product-images/b4.jpg', 800.00);
(5, 'product5', 'LPN06', 'product-images/b5.jpg', 1800.00);
(6, 'product6', 'LPN07', 'product-images/b6.jpg', 1800.00);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;