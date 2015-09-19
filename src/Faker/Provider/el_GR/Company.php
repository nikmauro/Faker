<?php namespace Faker\Provider\el_GR;

class Company extends \Faker\Provider\Company
{
    protected static $companySuffix = array(
        'Ο.Ε',
        'Ε.Ε',
        'Α.Ε',
        'Ε.Π.Ε',
        'Μ.Ε.Π.Ε',
        'Ι.Κ.Ε',
        'Α.Ε.Β.Ε'
    );

    protected static $companyFormats = array(
        '{{lastName}} {{firstName}} {{companySuffix}}',
        '{{lastName}}-{{firstName}}'
    );

    protected static $grafm = array('#########');


    protected static $doy = array(
        'Α\' Αθήνας',
        'Β\' Αθήνας',
        'Γ\' Αθήνας',
        'ΣΤ\' Αθήνας',
        'Γαλάτσιου',
        'Α\' Πειραιά',
        'Β\' Πειραιά',
        'Γ\' Πειραιά',
        'Α\' Θεσσαλονίκης',
        'Β\' Θεσσαλονίκης',
        'Γλυφάδας',
        'Ωροπού',
        'Καλιθέας',
        'Αγίου Δημητρίου',
        'Νέας Σμύρνης',
        'Αμαρουσίου',
        'Θήρας',
        'Αμοργού',
        'Πατρών',
        'ΔΟΥ ΠΛΟΙΩΝ',
        'ΦΑΕΕ ΑΘΗΝΩΝ',
        'Α\' ΠΕΡΙΣΤΕΡΙΟΥ',
        'Β\' ΠΕΡΙΣΤΕΡΙΟΥ'
    );


    protected static $οbject = array(
        'Προγραμματιστής',
        'Δικηγόρος',
        'Γιατρός',
        'Γραφίστας',
        'Αρχαιολόγος',
        'Εκπαιδευτικός',
        'Μεταφραστής',
        'Μηχανολόγος-μηχανικός',
        'Αρχιτέκτονας',
        'Δημοσιογράφος',
        'Υπηρεσίες Διαδικτύου',
        'Ραδιοφωνικές παραγωγές',
        'Καραγκιοζοπαίχτης',
        'Κουλουράς',
        'Κομπάρσος',
        'Καλλιτεχνικός πράκτορας',
        'Εισαγωγαί-εξαγωγαί',
        'Ωρολογοποιός',
        'Καθεκλοποιός',
        'Ελέυθερος επαγγελματίας',
        'Μικροπωλητής',
        'Ζωγράφος',
        'Τραγουδιστής',
        'Ηθοποιός',
        'Έμπορος',
        'Αγρότης'
    );

    /**
     * @example 'Αθήνας'
     */
    public static function doy()
    {
        return static::randomElement(static::$doy);
    }

    /**
     * Return The profession of a company
     *
     * @example 'Δημοσιογράφος'
     */
    public static function object()
    {
        return static::randomElement(static::$οbject);
    }
}
