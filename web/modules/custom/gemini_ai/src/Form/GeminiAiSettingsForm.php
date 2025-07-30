<?php

namespace Drupal\gemini_ai\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configuration form for Gemini AI settings.
 */
class GeminiAiSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['gemini_ai.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'gemini_ai_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('gemini_ai.settings');

    $form['api_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Google Gemini API Settings'),
      '#open' => TRUE,
    ];

    $form['api_settings']['api_key'] = [
      '#type' => 'key_select',
      '#title' => $this->t('Gemini API Key'),
      '#description' => $this->t('Select the key containing your Google Gemini API key. Create one at /admin/config/system/keys if needed.'),
      '#default_value' => $config->get('api_key'),
      '#required' => TRUE,
    ];

    $form['api_settings']['model'] = [
      '#type' => 'select',
      '#title' => $this->t('Gemini Model'),
      '#description' => $this->t('Select the Gemini model to use for content generation.'),
      '#options' => [
        'gemini-1.5-pro' => $this->t('Gemini 1.5 Pro'),
        'gemini-1.5-flash' => $this->t('Gemini 1.5 Flash'),
        'gemini-1.0-pro' => $this->t('Gemini 1.0 Pro'),
      ],
      '#default_value' => $config->get('model') ?: 'gemini-1.5-flash',
      '#required' => TRUE,
    ];

    $form['generation_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Content Generation Settings'),
      '#open' => TRUE,
    ];

    $form['generation_settings']['max_tokens'] = [
      '#type' => 'number',
      '#title' => $this->t('Max Tokens'),
      '#description' => $this->t('Maximum number of tokens to generate in the response.'),
      '#default_value' => $config->get('max_tokens') ?: 1000,
      '#min' => 1,
      '#max' => 4000,
    ];

    $form['generation_settings']['temperature'] = [
      '#type' => 'number',
      '#title' => $this->t('Temperature'),
      '#description' => $this->t('Controls randomness: 0.0 = deterministic, 1.0 = very creative.'),
      '#default_value' => $config->get('temperature') ?: 0.7,
      '#step' => 0.1,
      '#min' => 0,
      '#max' => 1,
    ];

    $form['features'] = [
      '#type' => 'details',
      '#title' => $this->t('Feature Settings'),
      '#open' => TRUE,
    ];

    $form['features']['enable_content_assistant'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable Content Assistant'),
      '#description' => $this->t('Show AI content generation tools in node edit forms.'),
      '#default_value' => $config->get('enable_content_assistant') !== FALSE,
    ];

    $form['features']['enable_auto_tagging'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable Auto-tagging'),
      '#description' => $this->t('Automatically suggest tags for content based on AI analysis.'),
      '#default_value' => $config->get('enable_auto_tagging') ?: FALSE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('gemini_ai.settings')
      ->set('api_key', $form_state->getValue('api_key'))
      ->set('model', $form_state->getValue('model'))
      ->set('max_tokens', $form_state->getValue('max_tokens'))
      ->set('temperature', $form_state->getValue('temperature'))
      ->set('enable_content_assistant', $form_state->getValue('enable_content_assistant'))
      ->set('enable_auto_tagging', $form_state->getValue('enable_auto_tagging'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
