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

namespace Google\Service\Dataform;

class WorkflowInvocation extends \Google\Model
{
  /**
   * @var string
   */
  public $compilationResult;
  protected $invocationConfigType = InvocationConfig::class;
  protected $invocationConfigDataType = '';
  protected $invocationTimingType = Interval::class;
  protected $invocationTimingDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $state;

  /**
   * @param string
   */
  public function setCompilationResult($compilationResult)
  {
    $this->compilationResult = $compilationResult;
  }
  /**
   * @return string
   */
  public function getCompilationResult()
  {
    return $this->compilationResult;
  }
  /**
   * @param InvocationConfig
   */
  public function setInvocationConfig(InvocationConfig $invocationConfig)
  {
    $this->invocationConfig = $invocationConfig;
  }
  /**
   * @return InvocationConfig
   */
  public function getInvocationConfig()
  {
    return $this->invocationConfig;
  }
  /**
   * @param Interval
   */
  public function setInvocationTiming(Interval $invocationTiming)
  {
    $this->invocationTiming = $invocationTiming;
  }
  /**
   * @return Interval
   */
  public function getInvocationTiming()
  {
    return $this->invocationTiming;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkflowInvocation::class, 'Google_Service_Dataform_WorkflowInvocation');
