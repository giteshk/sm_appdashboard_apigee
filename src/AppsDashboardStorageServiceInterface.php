<?php

namespace Drupal\sm_appdashboard_apigee;

/**
 * @file
 * Copyright (C) 2020  Stratus Meridian LLC.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

/**
 * Interface AppsDashboardStorageServiceInterface.
 */
interface AppsDashboardStorageServiceInterface {

  /**
   * Returns an array of labels.
   */
  public function labels();

  /**
   * Returns an array of developer/team apps details.
   */
  public function getAllAppDetails();

  /**
   * Returns app details.
   *
   * @param string $type
   *   The app type.
   * @param int $id
   *   The app entity id.
   */
  public function getAppDetailsById($type, $id);

  /**
   * Returns app details using different search options.
   *
   * @param string $key
   *   The search keyword.
   * @param string $type
   *   The search type.
   */
  public function searchBy($key, $type);

  /**
   * Returns app details using different datetime options.
   *
   * @param array $datetime
   *   The datetime search keyword.
   * @param string $type
   *   The search type.
   */
  public function searchByDates(array $datetime, $type);

  /**
   * Returns the API product details from an app.
   *
   * @param object $app
   *   Object of an app.
   */
  public function getApiProducts($app);

  /**
   * Returns the status of the app.
   *
   * @param object $app
   *   Object of an app.
   */
  public function getOverallStatus($app);

  /**
   * Returns the extracted part of string or false on failure.
   *
   * @param string $string
   *   The original string.
   * @param string $startString
   *   The part of the string to check whether it is starting with it or not.
   */
  public function startsWith($string, $startString);

  /**
   * Returns a split array implementing Sort.
   *
   * @param array $rows
   *   Table rows which need sortable.
   * @param array $header
   *   Table header.
   * @param string $flag
   *   Specifies how to compare the array elements/items.
   */
  public function constructSort(array $rows, array $header, $flag = SORT_STRING | SORT_FLAG_CASE);

  /**
   * Returns a split array implementing pager.
   *
   * @param array $items
   *   Items which need split.
   * @param int $num_page
   *   How many items view in page.
   */
  public function constructPager(array $items, $num_page);

}
