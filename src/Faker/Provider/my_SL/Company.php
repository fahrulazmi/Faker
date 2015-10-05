<?php

namespace Faker\Provider\my_SL;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}'
    );

    protected static $companySuffix = array('Enterprise', 'Sdn Bhd', 'Group', 'Trading', 'Beauty', 'Health', 'Cosmetics', 'Hijab', 'Foods', 'Labs', 'Holding', 'Shop');
}
