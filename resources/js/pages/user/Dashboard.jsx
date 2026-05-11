export default function Dashboard({ user }) {
  return (
    <div>
      <h1>Welcome {user.name} ❤️</h1>
      <p>This is your dashboard without page reload.</p>
    </div>
  );
}