
class TipoTramite extends React.Component{
	render(){
		return (
			<tr>
				<td>{this.props.nombre}</td>
				<td>{this.props.descripcion}</td>

			</tr>
			
		);
	}
}
	

window.TablaTiposTramite = React.createClass({
	getInitialState(){
		return {data:[]};
	},

	cargarDatos(){
		$.ajax({
	  		url: this.props.url,
			dataType: 'json',
	  			  		
	  		success: function(data) {
	  			console.log(data);
	    		this.setState({data: data});
	  		}.bind(this),
	  
	  		error: function(xhr, status, err) {
	    		console.error(this.props.url, status, err.toString());
	  		}.bind(this)
		});
	},

	componentDidMount(){
		this.cargarDatos();
	setInterval(this.cargarDatos,this.props.refresh)
	},

	render(){
		return(
			
<table className="table table-striped">
		  <thead>
		      <tr>
		        
		        <th>Tipo de Tramite</th>
	        	<th>Descripción</th>
		      
		      </tr>
		    </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (tipo){
				 		return(
				 				<TipoTramite
				 					nombre={tipo.nombre} 
				 					descripcion={tipo.descripcion}
				 					key={tipo.id}
				 				/>
				 		)
				 	}
			 	)
			}
		    </tbody>

		</table>

		);
	}

});
