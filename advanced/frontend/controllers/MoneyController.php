<?php

namespace frontend\controllers;

header("content-type:text/html;charset=utf-8");

class MoneyController extends  CommonController
{


    //金银豆获取
    public function actionMoney()
    {

        if (isset($this->data['pa'])) {
            //计算偏移量
            $offset = 6 * ($this->data['pa'] - 1);

            $reg = (new \yii\db\Query())->select(['*'])
                ->from('money')->join('join', 'user', 'money.u_id=user.u_id')
                ->orderBy('b_money')
                ->limit(6)
                ->offset($offset)
                ->all();
//            print_r($reg);die;

            //查询总共多少页数据
            $sum = (new \yii\db\Query())->select(['u_id'])->from('money')->count();
////            print_r($sum);die;

            if ($reg) {
                foreach ($reg as &$v) {

                    $v['sex'] = $v['sex'] == '1' ? '男' : '女';
                    $v['user_addTime'] = date('Y-m-d H:i:s', $v['user_addTime']);
                    $this->return = ['error' => '200', 'msg' => $reg, 'sum' => ceil($sum / 6)];

                }
            }  }else {
                $this->return = ['error' => '101', 'msg' => '参数有误'];
            }
        }

    }
