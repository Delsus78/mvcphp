<?php

include_once(__DIR__.'/database.php');

/**
 * Acc�s � la base de donn�es de l'IUT
 */
class DBIUT extends DataBase
{
    //Instance static du singleton
    private static $handle = null;

	/**
	 * Constructeur
	 */
	protected function __construct()
	{
		parent::__construct('localhost','grp-108', 'grp-108', 'i2jsKB44');
		parent::connect();
	}

    /**
     * Fonction static permettant de r�cup�rer l'instance du singleton
     */
    public static function getInstance()
    {
        if(is_null(self::$handle))
            self::$handle = new DBIUT();

        return self::$handle;
    }
}
?>