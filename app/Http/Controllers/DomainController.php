<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class DomainController extends Controller
{
    public function __construct() {
        $this->modelDomain = new Domain();
    }

    public function addDomain(Request $request) {
        $rules = [
            'domain_url' => ['required','max:50','unique:domain,domain_url'],
            'brandDdl' => ['required'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $this->modelDomain->domain_url = $request->get('domain_url');
            $this->modelDomain->brand_id = $request->get('brandDdl');

            $insertResult = $this->modelDomain->insertDomain();

            if($insertResult) {
                return redirect()->back()->with('success','Domain has been added successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding new domain to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new domain | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new domain!');
        }
    }

    public function editDomain(Request $request) {

        $rules = [
            'domainIdHiddenModal' => ['required'],
            'domainUrlModal' => ['required','max:50'],
            'brandDdlModal' => ['required'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $id = $request->get('domainIdHiddenModal');
            $this->modelDomain->domain_url = $request->get('domainUrlModal');
            $this->modelDomain->brand_id = $request->get('brandDdlModal');

            $updateResult = $this->modelDomain->editDomain($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Domain has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the domain!');
            } else {
                return redirect()->back()->with('error','Error with editing domain!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing domain | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing domain!');
        }
    }

    public function getBrandDomains($id) {
        $brandDomains = $this->modelDomain->getBrandDomains($id, null);
        $groupedDomains = $this->getMultipleItemsFromQuery(json_decode($brandDomains, true),'id_domain');
        if($brandDomains) {
            return json_encode($groupedDomains, true);
        }
    }

    public function getDomain($id) {
        $domains = $this->modelDomain->getBrandDomains(null, $id);
        if($domains) {
            return json_encode($domains, true);
        }
    }

    public function deleteDomain($id) {
        try {
            $deleteResult = $this->modelDomain->deleteDomain($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Domain has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting domain!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting domain | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting domain!');
        }
    }

}
