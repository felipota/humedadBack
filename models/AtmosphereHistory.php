<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atmosphere_history".
 *
 * @property int $id indice de la tabla
 * @property int $humidity humedad
 * @property int $pressure presión
 * @property int $rising precipitación
 * @property int $visibility visibilidad
 * @property string $fecha_consulta
 */
class AtmosphereHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atmosphere_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['humidity', 'pressure', 'rising', 'visibility'], 'required'],
            [['humidity', 'pressure', 'rising', 'visibility'], 'integer'],
            [['fecha_consulta'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'humidity' => 'Humidity',
            'pressure' => 'Pressure',
            'rising' => 'Rising',
            'visibility' => 'Visibility',
            'fecha_consulta' => 'Fecha Consulta',
        ];
    }
}
