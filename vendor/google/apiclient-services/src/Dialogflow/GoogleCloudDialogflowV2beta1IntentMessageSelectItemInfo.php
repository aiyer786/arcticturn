<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo extends \Google\Collection
{
  protected $collection_key = 'synonyms';
  public $key;
  public $synonyms;

  public function setKey($key)
  {
    $this->key = $key;
  }
  public function getKey()
  {
    return $this->key;
  }
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  public function getSynonyms()
  {
    return $this->synonyms;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo');
