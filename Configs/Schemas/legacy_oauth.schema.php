<?php
/**
 * This file is part of the DreamFactory Oasys (Open Authentication SYStem)
 *
 * DreamFactory Oasys (Open Authentication SYStem) <http://dreamfactorysoftware.github.io>
 * Copyright 2013 DreamFactory Software, Inc. <support@dreamfactory.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace DreamFactory\Oasys\Configs\Schemas;

use DreamFactory\Oasys\Enums\Flows;
use DreamFactory\Oasys\Enums\OAuthTypes;

/**
 * legacy_oauth.schema.php
 * The config schema for an OAuth v1.x service
 */
return array(
	'consumer_key'        => array( 'type' => 'string', 'length' => 64, 'required' => true ),
	'consumer_secret'     => array( 'type' => 'string', 'length' => 128, 'required' => true ),
	'redirect_uri'        => array( 'type' => 'string', 'length' => 1024, 'required' => true ),
	'signature_method'    => array( 'type' => 'string', 'length' => 16, 'required' => false, 'default' => OAUTH_SIG_METHOD_HMACSHA1 ),
	'authorize_url'       => array( 'type' => 'string', 'length' => 1024, 'required' => false ),
	'auth_type'           => array( 'type' => 'select', 'required' => false, 'default' => OAuthTypes::URI, 'options' => OAuthTypes::getDefinedConstants( true ) ),
	'flow_type'           => array( 'type' => 'select', 'required' => false, 'default' => Flows::CLIENT_SIDE, 'options' => Flows::getDefinedConstants( true ) ),
	'access_token'        => array( 'type' => 'string', 'length' => 128, 'required' => false ),
	'access_token_secret' => array( 'type' => 'string', 'length' => 128, 'required' => false ),
);