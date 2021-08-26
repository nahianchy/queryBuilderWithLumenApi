
function query()
    {
        $result=DB::table("details")->sum('roll');

        return $result;
        
    }

    function aggregates()
    {
        $result=DB::table("details")->count('roll');
                                    // ->max('roll')
                                    // min('roll')
                                    // ->avg('roll')

        return $result;
        
    }

    function column()
    {
        $result=DB::table("details")->pluck('phone','roll');

        return $result;
        
    }

    function singleColumn()
    {
        $result=DB::table("details")->pluck('phone');

        return $result;
        
    }

    
    function singleDataByFind()
    {
        $result=DB::table("details")->find(3);

        return $result->phone;
        
    }

    function singleData()
    {
        $result=DB::table("details")->where('name','potato')->first();

        return $result->phone;
        
    }


    
    function allData()
    {
        $result=DB::table("details")->get();

        return $result;
        
    }