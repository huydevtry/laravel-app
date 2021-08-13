<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Firestore\FirestoreClient;

class testController extends Controller
{
    public function test() {

        $db = new FirestoreClient();
        $docRef = $db->collection('samples/php/users')->document('lovelace');
        $docRef->set([
            'first' => 'Ada',
            'last' => 'Lovelace',
            'born' => 1815
        ]);
        printf('Added data to the lovelace document in the users collection.' . PHP_EOL);
    }
    /**
     * Authenticate to a cloud client library using a service account implicitly.
     *
     * @param string $projectId The Google project ID.
     */
    function auth_cloud_implicit($projectId)
    {
        $config = [
            'projectId' => $projectId,
        ];

        # If you don't specify credentials when constructing the client, the
        # client library will look for credentials in the environment.
        $storage = new StorageClient($config);

        # Make an authenticated API request (listing storage buckets)
        foreach ($storage->buckets() as $bucket) {
            printf('Bucket: %s' . PHP_EOL, $bucket->name());
        }
    }

    /**
     * Initialize Cloud Firestore with default project ID.
     */
    function setup_client_create()
    {
        // Create the Cloud Firestore client
        $db = new FirestoreClient();
        printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
    }
}
