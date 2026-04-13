import json
from pathlib import Path
import unittest


class CandidateSchemaTests(unittest.TestCase):
    def test_candidate_schema(self) -> None:
        payload = json.loads(Path("data/candidates.json").read_text(encoding="utf-8"))
        self.assertGreaterEqual(len(payload), 3)
        for row in payload:
            self.assertIn("name", row)
            self.assertIn("role", row)
            self.assertIn("country", row)
            self.assertIn("score", row)
            self.assertIsInstance(row["score"], int)
            self.assertTrue(row["name"].strip())


if __name__ == "__main__":
    unittest.main()
