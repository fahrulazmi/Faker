<?php

namespace Faker\Provider\my_SL;

class Address extends \Faker\Provider\Address
{
    //protected static $city = array('Kuala Lumpur', 'Seberang Perai', 'George Town', 'Kajang', 'Klang', 'Subang Jaya', 'Ipoh', 'Shah Alam', 'Petaling Jaya', 'Selayang', 'Johor Bahru Tengah', 'Johor Bahru', 'Malacca City', 'Muar', 'Ampang Jaya', 'Kota Kinabalu', 'Sungai Petani', 'Kuantan', 'Alor Setar', 'Tawau', 'Sandakan', 'Kuala Terengganu', 'Kota Bharu', 'Seremban', 'Kulim', 'Padawan', 'Taiping', 'Miri', 'Kulai', 'Kangar', 'Kuala Langat', 'Kubang Pasu', 'Bintulu', 'Manjung', 'Batu Pahat', 'Sepang', 'Kuala Selangor', 'Nilai', 'Lahad Datu', 'Hulu Selangor', 'Kinabatangan', 'Pasir Mas', 'Penampang', 'Alor Gajah', 'Keningau', 'Kluang', 'Kemaman', 'Kuching North', 'Sibu', 'Kuching South');
    protected static $city = array('Klang', 'Ampang Jaya', 'Subang Jaya', 'Shah Alam', 'Petaling Jaya', 'Cheras', 'Kajang', 'Selayang Baru', 'Rawang', 'Taman Greenwood', 'Kelana Jaya', 'Rawang', 'Gombak');

    protected static $buildingNumber = array('###', '##', '##-#');
    protected static $streetPrefix = array(
        'Jalan', 'Changkat', 'Persiaran', 'Lorong', 'Lebuh'
    );
    protected static $streetSuffix = array(
        'Avenue', 'Bypass', 'Center', 'Centers', 'Curve', 'Drive', 'Drives', 'Garden', 'Gardens', 'Gateway', 'Hill', 'Hills', 'Plaza', 'Points', 'Port', 'Ports'
    );
    protected static $streetNumber = array(
        '#/#',
        '#',
        '#a',
        '#b'
    );

    protected static $neighborhoodName = array('Mutiara', 'Pinggiran', 'Nexus', 'Alam', 'Vista', 'Setia');
    protected static $neighborhoodSuffix = array('Central', 'Park', 'Avenue', 'Curve', 'Garden', 'Centre', 'South', 'North', 'Front', 'Idaman', 'Mall');
    protected static $neighborhoodFormats = array(
        '{{neighborhoodName}} {{neighborhoodSuffix}}',
    );

    protected static $postcode = array('#####');
    //protected static $state = array('Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Pahang', 'Perak', 'Perlis', 'Pulau Pinang', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu', 'W.P. Kuala Lumpur', 'W.P. Labuan', 'W.P. Putrajaya');
    protected static $state = array('Selangor');
    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territory', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );
    protected static $cityFormats = array(
        '{{cityName}}'
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}, {{neighborhood}}',
        '{{buildingNumber}} {{streetName}} {{streetNumber}}, {{neighborhood}}'
    );
    protected static $addressFormats = array(
        "{{streetAddress}}, {{neighborhood}},\n{{postcode}} {{cityName}}, {{state}}"
    );

    /**
     * @example 'Avenue'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }
    public static function streetNumber()
    {
        return static::numerify(static::randomElement(static::$streetNumber));
    }

    public static function cityName()
    {
        return static::randomElement(static::$city);
    }

    public function neighborhood()
    {
        $format = static::randomElement(static::$neighborhoodFormats);

        return $this->generator->parse($format);
    }
    public static function neighborhoodName()
    {
        return static::randomElement(static::$neighborhoodName);
    }
    public static function neighborhoodSuffix()
    {
        return static::randomElement(static::$neighborhoodSuffix);
    }

    /**
     * @example 'California'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 77.147489
     * @return float Uses signed degrees format (returns a float number between -90 and 90)
     */
    public static function latitude()
    {
        return static::randomFloat(6, 2.7, 3.73);
    }

    /**
     * @example 86.211205
     * @return float Uses signed degrees format (returns a float number between -180 and 180)
     */
    public static function longitude()
    {
        return static::randomFloat(6, 101.3, 102);
    }
}
