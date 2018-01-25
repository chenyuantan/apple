<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $category_id
 * @property string $category_name
 * @property integer $parent_id
 * @property string $category_heat
 * @property string $path_id
 * @property string $ cate_status
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['category_name', 'category_heat', 'path_id'], 'string', 'max' => 30],
            [[' cate_status'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
            'parent_id' => 'Parent ID',
            'category_heat' => 'Category Heat',
            'path_id' => 'Path ID',
            ' cate_status' => 'Cate Status',
        ];
    }
    //无限极分类
    public function Tree($arr,$parent_id=0,$level=0)
    {
        // static $data = array();
        global $data;
        foreach ($arr as $k => $v) {
            if($v['parent_id']==$parent_id)
            {
                $data[]=$v;
                Tree($arr,$v['category_id'],$level+1);
            }
        }
        return $data;
    }

    
}
