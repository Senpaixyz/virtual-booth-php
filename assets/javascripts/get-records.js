(async () => {
  var pathArray = window.location.pathname.split( '/' );
  pathArray.pop();
  var absolutePath = window.location.protocol + '//' + window.location.host + pathArray.join('/');
  const response = await axios(
      {
          method: 'post',
          url: `${absolutePath}/routes/get-users`,
      }
  );


  if(response){
      if(response.data.records.length > 0){
        const initializedTable = new Promise((resolve,reject)=>{
            const table = $("#table-records");
            response.data.records.forEach(function(item){
              const agreement = item.terms_and_condition == 1 ? 'Yes' : 'No';
              const template = `
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ${item.created_at}
                            </th>
                            <td class="px-2 py-4">
                              ${item.first_name}
                            </td>
                            <td class="px-2 py-4">
                              ${item.last_name}
                            </td>
                            <td class="px-2 py-4">
                              ${item.prc}
                            </td>
                            <td class="px-2 py-4">
                              ${item.speciality}
                            </td>
                            <td class="px-2 py-4">
                                ${agreement}
                            </td>
                        </tr>
              `;
              table.find('tbody').append(template);
            });
            resolve();
        });

        initializedTable.then((re)=>{
    
        })


  
      }
    }

})();
