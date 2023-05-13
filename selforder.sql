CREATE DATABASE selforder;

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(100) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;