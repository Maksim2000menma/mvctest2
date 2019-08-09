class Table extends React.Component{
  constructor(props) {
      super(props) //since we are extending class Table so we have to use super in order to override Component class constructor
      this.state = { //state is by default an object
         students: [
            { id: 1, name: 'naruto', age: 21, email: 'test@email.com' },
            { id: 2, name: 'maksim', age: 19, email: 'test@email.com' },
            { id: 3, name: 'saske', age: 16, email: 'test@email.com' },
            { id: 4, name: 'maksim', age: 25, email: 'test@email.com' }
         ]
      }
   }
   renderTableData() {
      return this.state.students.map((student, index) => {
         const { id, name, age, email } = student //destructuring
         return (
            <tr key={id}>
               <td>{id}</td>
               <td>{name}</td>
               <td>{age}</td>
               <td>{email}</td>
            </tr>
         )
      })
   }

   renderTableHeader() {
      let header = Object.keys(this.state.students[0])
      return header.map((key, index) => {
         return <th key={index}>{key.toUpperCase()}</th>
      })
   }

   render() {
      return (
         <div>
            <h1 id='title'>React Static Table</h1>
            <table id='students' className="full_width">
               <tbody>
               <tr>{this.renderTableHeader()}</tr>
               {this.renderTableData()}
               </tbody>
            </table>
         </div>
      )
   }
}

ReactDOM.render(
  <div>
  <Table />
    </div>,
  document.getElementById('user_table')
);
