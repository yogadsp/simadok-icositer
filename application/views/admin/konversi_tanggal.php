<?php function tanggal_($tanggal)
        {           
            $bulan = array (1 =>   'Jan',
                        'Feb',
                        'Mar',
                        'Apr',
                        'Mei',
                        'Jun',
                        'Jul',
                        'Agt',
                        'Sep',
                        'Okt',
                        'Nov',
                        'Des'
                    );
            // memisah berdasarkan tanda strip (-)
            $split 	  = explode('-', $tanggal);

            // menyusun berdasarkan index dari string yang telah dipisah dengan spasi
            $tgl = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
            
            // if ($cetak_hari) {
            //     $num = date('N', strtotime($tanggal));
            //     return $hari[$num] . ', ' . $tgl_indo;
            // }
            return $tgl;
        }
        ?>