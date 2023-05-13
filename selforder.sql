CREATE DATABASE selforder;

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(100) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `rincian` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `tgl/jam` DATETIME,
  `nama_pelanggan` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `total_order` varchar(100) NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS 'pembukuan'(
  'tgl/jam' DATETIME,
  'total_harga' varchar (50) NOT NULL,
  'total_perbulan' varchar (50) NOT NULL,
  PRIMARY KEY ('tgl/jam')
)
