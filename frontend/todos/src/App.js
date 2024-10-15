import React, { useEffect, useState } from "react";
import axios from "axios";

const App = () => {
  const [value, setValue] = useState([]);
  const [title, setTitle] = useState("");
  const [description, setDescription] = useState("");
  
  const url = "http://localhost:9090/api/todo/";

  useEffect(() => {
    (async () => {
      try {
        const res = await axios.get(url);
        setValue(res.data);
        return;
      } catch (e) {
        return e;
      }
    })();
  }, []);

  const insertUser = async() => {
    const url = "http://localhost:9090/api/todo";
    const data = {
      title: title,
      description: description,
  }
      try {
        const res = await axios.post(url, data,{
          headers:{
            'Content-Type': 'application/json'
          }
        });
        setValue((prevTodos) => [...prevTodos, res.data]);
        setTitle("");
        setDescription("");
        return;
      } catch (e) {
        return e;
      }
  };

  return (
    <div className="App">
      {value.map((todo) => {
        return (
          <div key={todo.id}>
            <h1>{todo.title}</h1>
            <p>{todo.description}</p>
          </div>
        );
      })}
      <input type="text" name="todo" value={title} onChange={e => setTitle(e.target.value)} />
      <input type="text" name="description" value={description} onChange={e => setDescription(e.target.value)}/>
      <button onClick={insertUser}>送信</button>
    </div>
  );
};

export default App;
