<?php
/**
 * This file is part of Shopbay.org (http://shopbay.org)
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code. or refer to LICENSE.md
 */
namespace tests\codeception\_support\models;

use yii\db\ActiveRecord;
/**
 * This is the model class for table "s_account_profile".
 *
 */
class AccountProfile extends ActiveRecord 
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_account_profile';
    }
}
