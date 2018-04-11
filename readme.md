CREATE DATABASE test;
USE test;

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `test` (`id`, `username`, `password`) VALUES
(1, '111', '222'),
(2, '222', '333'),
(3, '333', '444');

ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


