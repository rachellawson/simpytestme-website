<?php

namespace Drupal\simplytest_tugboat;

/**
 * InstanceManager service.
 */
interface InstanceManagerInterface {

  /**
   * Loads the preview ID from a base preview branch.
   *
   * @param string $context
   *   Context?
   * @param bool $base
   *   Whether to prefix $context with "base-".
   *
   * @return string
   *   The ID of the preview.
   */
  public function loadPreviewId(string $context, bool $base = TRUE): string;

  /**
   * Callback for the tugboat launch instance.
   *
   * @param array{additionals: string[], bypass_install: bool, patches: string[], project: string, oneclickdemo: string, version: string} $submission
   *   An array describing a Drupal project. The  following keys are used:
   *   - additionals
   *   - bypass_install
   *   - patches
   *   - project: defaults to 'drupal'
   *   - oneclickdemo
   *   - version
   */
  public function launchInstance(array $submission): array;

}
