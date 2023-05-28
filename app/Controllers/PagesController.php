<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\LotModel;
use App\Models\PropertyDistanceModel;
use App\Models\PropertyValuationModel;

class PagesController extends BaseController
{
    public function index()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('about');
    }

    public function search()
    {

        $lotModel = new LotModel();
        
        $lots = $lotModel->findAll();

        // Retrieve the data you want to pass to the view
        $data = [
            'lots' => $lots,
        ];

        echo view('search', $data);
    }

    public function adminHome()
    {       
        $data = [];

        return view('adminhome', $data);
    }

    public function adminAbout()
    {
        return view('adminabout');
    }

    public function adminSearch()
    {
        $lotModel = new LotModel();
        
        $lots = $lotModel->findAll();

        // Retrieve the data you want to pass to the view
        $data = [
            'lots' => $lots,
        ];

        echo view('adminsearch', $data);
    }

    public function searchinfo()
    {
        $lotModel = new LotModel();

        $lotNo = $this->request->getVar('lot_no'); // Get the lot_no from the request

        $lots = $lotModel->where('lot_no', $lotNo)->findAll(); // Perform the search based on lot_no

        $data = [
            'lots' => $lots,
        ];

        echo view('searchinfo', $data);
    }


    public function documents()
    {

        $lotModel = new LotModel();
        
        $lots = $lotModel->findAll();

        // Retrieve the data you want to pass to the view
        $data = [
            'lots' => $lots,
        ];

        return view('documents', $data);
    }

    public function reports()
    {
        return view('reports');
    }

    public function add()
    {
        $data = [];
        helper(['form']);
    
        if ($this->request->getMethod() == 'post') {
            $newData = [
                'lot_no' => $this->request->getVar('lot_no'),
                'cad_no' => $this->request->getVar('cad_no'),
                'size_of_area' => $this->request->getVar('size_of_area'),
                'location' => $this->request->getVar('location'),
                'phase' => $this->request->getVar('phase'),
                'land_owner' => $this->request->getVar('land_owner'),
                'status' => $this->request->getVar('status'),
            ];
    
            // Instantiate models
            $lotModel = new LotModel();
            $propertyDistanceModel = new PropertyDistanceModel();
            $propertyValuationModel = new PropertyValuationModel();
    
            // Attempt to save data
            try {
                // Save lot details
                $lotId = $lotModel->save($newData);
                // Save property distance
    
                $propertyDistanceModel->save([
                    'lot_id' => $lotModel->getInsertID(),
                    'bllm' => $this->request->getVar('bllm'),
                    'distance_to_point1' => $this->request->getVar('distance_to_point1'),
                ]);
    
                // Save property valuation
                $propertyValuationModel->save([
                    'lot_id' => $lotModel->getInsertID(),
                    'valuation_amount' => $this->request->getVar('valuation_amount'),
                    'tree_valuation_amount' => $this->request->getVar('tree_valuation_amount'),
                    'disturbance_amount' => $this->request->getVar('disturbance_amount'),
                    'house_structure_amount' => $this->request->getVar('house_structure_amount'),
                ]);
                
                // Pass the new land detail to the view
                $data['lot_no'] = $newData['lot_no'];
                $data['cad_no'] = $newData['cad_no'];
                $data['size_of_area'] = $newData['size_of_area'];
                $data['location'] = $newData['location'];
                
                // Redirect to success page
                return redirect()->to('/documents/')->with('newData', $data);    
    
            } catch (\Exception $e) {
                // Handle any exceptions thrown during the save process
                log_message('error', $e->getMessage()); // Log the error message
                $data['error'] = 'An error occurred while saving the data. Please try again later.'; // Set an error message to display
            }
        }
    
        echo view('add', $data);
    }
    

    public function update($lotId)
    {

        $data = [];
        helper(['form']);

        // Instantiate models
        $lotModel = new LotModel();
        $propertyDistanceModel = new PropertyDistanceModel();
        $propertyValuationModel = new PropertyValuationModel();

        // Get the data of the lot to be updated
        $lot = $lotModel->find($lotId);
        $propertyDistance = $propertyDistanceModel->where('lot_id',$lotId)->first();
        $propertyValuation = $propertyValuationModel->where('lot_id',$lotId)->first();
        // Populate the form with the data
        $data['lotId'] = $lotId;
        $data['lot'] = $lot;
        $data['propertyDistance'] = $propertyDistance;
        $data['propertyValuation'] = $propertyValuation;

        if ($this->request->getMethod() == 'post') {
            $updatedData = [
                'lot_no' => $this->request->getVar('lot_no'),
                'cad_no' => $this->request->getVar('cad_no'),
                'size_of_area' => $this->request->getVar('size_of_area'),
                'location' => $this->request->getVar('location'),
                'phase' => $this->request->getVar('phase'),
                'land_owner' => $this->request->getVar('land_owner'),
                'status' => $this->request->getVar('status'),
            ];

            // Attempt to update data
            try {
                // Update lot details
                $lotModel->update($lotId, $updatedData);

                // Update property distance
                $propertyDistanceModel->where('lot_id', $lotId)->set([
                    'bllm' => $this->request->getVar('bllm'),
                    'distance_to_point1' => $this->request->getVar('distance_to_point1'),
                ])->update();

                // Update property valuation
                $propertyValuationModel->where('lot_id', $lotId)->set([
                    'valuation_amount' => $this->request->getVar('valuation_amount'),
                    'tree_valuation_amount' => $this->request->getVar('tree_valuation_amount'),
                    'disturbance_amount' => $this->request->getVar('disturbance_amount'),
                    'house_structure_amount' => $this->request->getVar('house_structure_amount'),
                ])->update();

                // Redirect to success page
                return redirect()->to('/documents/');

            } catch (\Exception $e) {
                // Handle any exceptions thrown during the update process
                log_message('error', $e->getMessage()); // Log the error message
                $data['error'] = 'An error occurred while updating the data. Please try again later.'; // Set an error message to display
            }
        }

        echo view('update', $data);
        // get the data of the lot to be updated
        // Populate the form with the data

        // If the form is submitted via POST
        // Get the data from the form
        // Update the data in the database
    }
    
}
