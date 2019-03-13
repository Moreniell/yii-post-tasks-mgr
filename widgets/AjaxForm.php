<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/**
 * Class AjaxForm
 *
 * @author Ivanchenko Andrey <ivanchenko.andrey.d@ukr.net>
 * @since 1.0
 */
class AjaxForm extends Widget
{
    public $forms = [];
    public $submit = [];
    public $formPicker = [];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        if (count($this->forms) > 1) {
            return $this->renderFormPicker();
        } else {
            return $this->renderForm();
        }
    }

    /**
     * Renders a single form.
     *
     * @param null $model
     * @return string
     */
    protected function renderForm($model = null) {
        if (is_null($model)) {
            $model = $this->forms[0];
        }

        $modelVars = get_object_vars($model);
        unset($modelVars['formName']);
        $formFields = array_keys($modelVars);

        $form = ActiveForm::begin([
            'enableAjaxValidation' => true,
            'validationUrl' => 'validation-rul',
        ]);
        foreach ($formFields as $attribute) {
            echo $form->field($model, $attribute, ['enableAjaxValidation' => true]);
        }

        $content = $this->submit['content'];
        $options = $this->submit;
        unset($options['content']);
        echo '<div class="form-group">'.Html::submitButton(isset($content) ? $content : 'Submit', $options).'</div>';
        ActiveForm::end();

        return '';
    }

    /**
     * Renders a multiple forms with the form picker.
     *
     * @return string
     */
    protected function renderFormPicker() {
        $fpItems = [];
        foreach ($this->forms as $i => $model) {
            $fpItems[$i+1] = (isset($model->formName) ? $model->formName : self::getClass($model));
        }

        $fpOptions = $this->formPicker;
        $fpLabelContent = $fpOptions['label'];
        unset($fpOptions['label']);

        if (!isset($fpOptions['id'])) {
            $fpOptions['id'] = 'form-picker';
        }

        echo '<div class="form-group">
                <label class="control-label" for="form-picker">'.(isset($fpLabelContent) ? $fpLabelContent : 'Form Picker').'</label>';
        echo Html::dropDownList('selected_form', 1, $fpItems, $fpOptions);
        echo '</div>';

        foreach ($this->forms as $i => $model) {
            echo '<div id="form-'.($i+1).'" class="form-content">';
            echo $this->renderForm($model);
            echo '</div>';
        }

        return "<script>
            // Hide all tabs first.
            $('.form-content').hide();
            // Show the first tab content.
            $('#form-1').show();
            
            $('#".$fpOptions['id']."').change(function () {
               var dropdown = $('#".$fpOptions['id']."').val();
              // First hide all tabs again when a new option is selected.
              $('.form-content').hide();
              // Then show the tab content of whatever option value was selected.
              $('#' + 'form-' + dropdown).show();                                    
            });
            </script>";
    }

    protected static function getClass($obj)
    {
        $classname = get_class($obj);
        if (preg_match('@\\\\([\w]+)$@', $classname, $matches)) {
            $classname = $matches[1];
        }
        return $classname;
    }
}