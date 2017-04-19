<?php
/**
 * @file
 * Contains Drupal\mytest\MyTestForm
 */
namespace Drupal\mytest\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class MyTestForm extends FormBase {
  public function getFormId() {
    return 'mytest_form';
  }
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['fullname'] = array(
      '#type' => 'textfield',
      '#title' => t('Full Name'),
      '#required' => TRUE,
    );
    $form['email'] = array(
      '#type' => 'email',
      '#title' => t('Email Address'),
      '#required' => TRUE,
    );
     $form['gender'] = array(
      '#type' => 'select',
      '#title' => t('Gender'),
      '#options' => array(
        t('Male'),
        t('Female')
        ),
      '#required' => TRUE,
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;

  }
  
  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    
  }
  
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message('Message');
  }

}